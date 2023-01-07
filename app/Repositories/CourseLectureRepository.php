<?php

namespace App\Repositories;

use App\Interfaces\CrudInterface;
use App\Interfaces\SlugInterface;
use Akash\LaravelUniqueSlug\Facades\UniqueSlug;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CourseLectureRepository implements CrudInterface, SlugInterface
{
    /**
     * Get categories by filtering args.
     */
    public function get(array $args = []): \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder|\Illuminate\Pagination\Paginator
    {
        $orderBy = empty($args['order_by']) ? 'id' : $args['order_by']; // column name
        $order   = empty($args['order']) ? 'desc' : $args['order']; // asc, desc
        $query   = Lesson::where('course_id', $args['course']->id)
            ->orderBy($this->processOrderBy($orderBy), $order);

        if (isset($args['limit'])) {
            $query->limit(intval($args['limit']));
        }

        // Handle exclude by course ids (arra)
        if (isset($args['excludes'])) {
            $query->whereNotIn('id', $args['excludes']);
        }

        // Searching
        if (isset($args['search'])) {
            $query->where(function ($query) use ($args) {
                $search = '%' . $args['search'] . '%';
                $query->where('title', 'like', $search)
                    ->orWhere('description', 'like', $search);
            });
        }

        // Min Price
        if (isset($args['min_price'])) {
            $minPrice = floatval($args['min_price']);
            if ($minPrice !== 0) {
                $query->where('price', '>=', $minPrice)
                    ->where('is_free', 0);
            }
        }

        // Max Price
        if (isset($args['max_price'])) {
            $query->where('price', '<=', floatval($args['max_price']));
        }

        // Set pagination if provided
        if (isset($args['paginated']) && $args['paginated']) {
            $paginationType = $args['pagination_type'] ?? '';

            if ($paginationType === 'simple') {
                return $query->simplePaginate(intval($args['paginated']));
            } else {
                return $query->paginate(intval($args['paginated']));
            }
        }

        if (isset($args['is_query']) && $args['is_query']) {
            return $query;
        }

        return $query->get();
    }

    private function processOrderBy(string $orderBy)
    {
        switch ($orderBy) {
            case 'popular':
                return 'total_view';

            case 'latest':
                return 'id';

            default:
                return $orderBy;
        }
    }

    public function show(int $id): Lesson|null
    {
        return Lesson::find($id);
    }

    public function showBySlug(string $slug): Lesson|null
    {
        return Lesson::where('slug', $slug)->first();
    }

    public function create(array $data): Lesson|null
    {
        $this->prepareDataForDatabase($data);
        return Lesson::create($data);
    }

    public function update(array $data, int|Lesson $lesson): Lesson|null
    {
        $lesson = $this->getCourseInstance($lesson);
        $this->prepareDataForDatabase($data, $lesson);
        $lesson->update($data);

        // Find the data and return
        return $this->show($lesson->id);
    }

    public function delete(int|Lesson $lesson): Lesson|null
    {
        $lesson = $this->getCourseInstance($lesson);

        if (!empty($lesson)) {
            $this->deleteBanner($lesson);
            $this->deleteVideo($lesson);
            $lesson->delete();
        }

        return $lesson;
    }

    public function getLessonTypes(): array
    {
        return [
            'video'      => 'Video lecture',
            'text'       => 'Article type lecture',
            'assignment' => 'Assignment'
        ];
    }

    public function getLessonLabels(): array
    {
        return [
            'beginner'     => 'Beginner',
            'intermediate' => 'Intermediate',
            'advanced'     => 'Advanced'
        ];
    }

    private function deleteBanner(Lesson $lesson): void
    {
        if (!empty($lesson->banner) && Storage::exists($lesson->banner)) {
            Storage::delete($lesson->banner);
        }
    }

    private function deleteVideo(Lesson $lesson): void
    {
        if (!empty($lesson->video_url) && Storage::exists($lesson->video_url)) {
            Storage::delete($lesson->video_url);
        }
    }

    private function getCourseInstance(int|Lesson $lesson): Lesson|null
    {
        if (!$lesson instanceof Lesson) {
            $lesson = $this->show($lesson);
        }

        return $lesson;
    }

    private function prepareDataForDatabase(array &$data, ?Lesson $lesson = null): void
    {
        if (empty($data['slug'])) {
            $data['slug'] = UniqueSlug::generate(Lesson::class, $data['title'], 'slug');
        }

        if (!empty($data['banner'])) {
            if ($lesson) {
                $this->deleteBanner($lesson);
            }

            $image_name = $data['slug'] . '-' . time() . '.' . $data['banner']->extension();
            $data['banner'] = $data['banner']->storePubliclyAs('public', $image_name);
        }

        if (!empty($data['video_url'])) {
            if ($lesson) {
                $this->deleteVideo($lesson);
            }

            $image_name = $data['slug'] . '-' . time() . '.' . $data['video_url']->extension();
            $data['video_url'] = $data['video_url']->storePubliclyAs('public', $image_name);
        }

        if (!$lesson) {
            $data['created_by'] = Auth::id();
        } else {
            $data['updated_by'] = Auth::id();
        }
    }
}
