<?php

namespace App\Repositories;

use App\Interfaces\CrudInterface;
use App\Interfaces\SlugInterface;
use Akash\LaravelUniqueSlug\Facades\UniqueSlug;
use App\Models\Page;
use Illuminate\Support\Facades\Storage;

class PageRepository implements CrudInterface, SlugInterface
{
    /**
     * Get pages by filtering args.
     */
    public function get(array $args = []): \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder
    {
        $orderBy = empty($args['order_by']) ? 'id' : $args['order_by']; // column name
        $order   = empty($args['order']) ? 'desc' : $args['order']; // asc, desc
        $query   = Page::orderBy($orderBy, $order);

        if (isset($args['is_query']) && $args['is_query']) {
            return $query;
        }

        return $query->get();
    }

    public function show(int $id): Page|null
    {
        return Page::find($id);
    }

    public function showBySlug(string $slug): Page|null
    {
        return Page::where('slug', $slug)->first();
    }

    public function create(array $data): Page|null
    {
        $this->prepareDataForDatabase($data);
        return Page::create($data);
    }

    public function update(array $data, int|Page $page): Page|null
    {
        $page = $this->getPageInstance($page);
        $this->prepareDataForDatabase($data, $page);
        $page->update($data);

        // Find the data and return
        return $this->show($page->id);
    }

    public function delete(int|Page $page): Page|null
    {
        $page = $this->getPageInstance($page);

        if (!empty($page)) {
            $page->delete();
            return $page;
        }

        return null;
    }

    private function getPageInstance(int|Page $page): Page|null
    {
        if (!$page instanceof Page) {
            $page = $this->show($page);
        }

        return $page;
    }

    private function prepareDataForDatabase(array &$data, ?Page $page = null): void
    {
        if (empty($data['slug'])) {
            $data['slug'] = UniqueSlug::generate(Page::class, $data['title'], 'slug');
        }

        if (empty($page)) {
            $data['created_by'] = 1;
        }
    }
}
