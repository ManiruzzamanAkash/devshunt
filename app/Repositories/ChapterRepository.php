<?php

namespace App\Repositories;

use App\Interfaces\CrudInterface;
use App\Interfaces\SlugInterface;
use Akash\LaravelUniqueSlug\Facades\UniqueSlug;
use App\Models\Chapter;
use Illuminate\Support\Facades\Storage;

class ChapterRepository implements CrudInterface, SlugInterface
{
    /**
     * Get categories by filtering args.
     */
    public function get(array $args = []): \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder
    {
        $orderBy = empty($args['order_by']) ? 'priority' : $args['order_by']; // column name
        $order   = empty($args['order']) ? 'asc' : $args['order']; // asc, desc
        $query   = Chapter::where('course_id', $args['course']->id)
            ->orderBy($orderBy, $order);

        if (isset($args['is_query']) && $args['is_query']) {
            return $query;
        }

        return $query->get();
    }

    public function show(int $id): Chapter|null
    {
        return Chapter::find($id);
    }

    public function showBySlug(string $slug): Chapter|null
    {
        return Chapter::where('slug', $slug)->first();
    }

    public function create(array $data): Chapter|null
    {
        $this->prepareDataForDatabase($data);
        return Chapter::create($data);
    }

    public function update(array $data, int|Chapter $chapter): Chapter|null
    {
        $chapter = $this->getCategoryInstance($chapter);
        $this->prepareDataForDatabase($data, $chapter);
        $chapter->update($data);

        // Find the data and return
        return $this->show($chapter->id);
    }

    public function delete(int|Chapter $chapter): Chapter|null
    {
        $chapter = $this->getCategoryInstance($chapter);

        if (!empty($chapter)) {
            $this->deleteLogo($chapter);
            $chapter->delete();
            return $chapter;
        }

        return null;
    }

    private function deleteLogo(Chapter $chapter): void
    {
        if (!empty($chapter->logo) && Storage::exists($chapter->logo)) {
            Storage::delete($chapter->logo);
        }
    }

    private function getCategoryInstance(int|Chapter $chapter): Chapter|null
    {
        if (!$chapter instanceof Chapter) {
            $chapter = $this->show($chapter);
        }

        return $chapter;
    }

    private function prepareDataForDatabase(array &$data, ?Chapter $chapter = null): void
    {
        if (empty($data['slug'])) {
            $data['slug'] = UniqueSlug::generate(Chapter::class, $data['title'], 'slug');
        }
    }
}
