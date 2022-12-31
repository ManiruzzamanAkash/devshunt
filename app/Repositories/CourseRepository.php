<?php

namespace App\Repositories;

use App\Interfaces\CrudInterface;
use App\Interfaces\SlugInterface;
use Akash\LaravelUniqueSlug\Facades\UniqueSlug;
use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CourseRepository implements CrudInterface, SlugInterface
{
    /**
     * Get categories by filtering args.
     */
    public function get(array $args = []): \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder
    {
        $orderBy = empty($args['order_by']) ? 'id' : $args['order_by']; // column name
        $order   = empty($args['order']) ? 'desc' : $args['order']; // asc, desc
        $query   = Course::orderBy($orderBy, $order)
            ->with('category');

        if (isset($args['is_query']) && $args['is_query']) {
            return $query;
        }

        return $query->get();
    }

    public function show(int $id): Course|null
    {
        return Course::find($id);
    }

    public function showBySlug(string $slug): Course|null
    {
        return Course::where('slug', $slug)->first();
    }

    public function create(array $data): Course|null
    {
        $this->prepareDataForDatabase($data);
        return Course::create($data);
    }

    public function update(array $data, int|Course $course): Course|null
    {
        $course = $this->getCourseInstance($course);
        $this->prepareDataForDatabase($data, $course);
        $course->update($data);

        // Find the data and return
        return $this->show($course->id);
    }

    public function delete(int|Course $course): Course|null
    {
        $course = $this->getCourseInstance($course);

        if (!empty($course)) {
            $this->deleteLogo($course);
            $course->delete();
            return $course;
        }

        return null;
    }

    private function deleteLogo(Course $course): void
    {
        if (!empty($course->banner) && Storage::exists($course->banner)) {
            Storage::delete($course->banner);
        }
    }

    private function getCourseInstance(int|Course $course): Course|null
    {
        if (!$course instanceof Course) {
            $course = $this->show($course);
        }

        return $course;
    }

    private function prepareDataForDatabase(array &$data, ?Course $course = null): void
    {
        if (empty($data['slug'])) {
            $data['slug'] = UniqueSlug::generate(Course::class, $data['title'], 'slug');
        }

        if (!empty($data['banner'])) {
            if ($course) {
                $this->deleteLogo($course);
            }

            $image_name = $data['slug'] . '-' . time() . '.' . $data['banner']->extension();
            $data['banner'] = $data['banner']->storePubliclyAs('public', $image_name);
        }

        if (!$course) {
            $data['created_by'] = Auth::id();
        } else {
            $data['updated_by'] = Auth::id();
        }

        if (isset($data['is_free'])) {
            $data['price'] = 0;
            $data['offer_price'] = 0;
        } else {
            $data['price'] = floatval($data['price']);
            $data['offer_price'] = floatval($data['offer_price']);
        }

        // $data['enable_homepage'] = isset($data['enable_homepage']) ? 1 : 0;
    }
}
