<?php

namespace App\Repositories;

use Illuminate\Support\Str;
use App\Interfaces\CrudInterface;
use App\Interfaces\SlugInterface;
use App\Models\Category;

class CategoryRepository implements CrudInterface, SlugInterface
{
    public function get(array $args = []): \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder
    {
        $orderBy = empty($args['order_by']) ? 'id' : $args['order_by']; // column name
        $order   = empty($args['order']) ? 'desc' : $args['order']; // asc, desc
        $query   = Category::orderBy($orderBy, $order);

        if (isset($args['is_query']) && $args['is_query']) {
            return $query;
        }

        return $query->get();
    }

    public function show(int $id): Category|null
    {
        return Category::find($id);
    }

    public function showBySlug(string $slug): Category|null
    {
        return Category::where('slug', $slug)->first();
    }

    public function create(array $data): Category|null
    {
        // Create
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        return Category::create($data);

        // Find the data and return
        // return $this->show($id);
    }

    public function update(array $data, int $id): Category|null
    {
        // Update

        // Find the data and return
        return $this->show($id);
    }


    public function delete(int $id): Category|null
    {
        $category = $this->show($id);

        if (!empty($category)) {
            $category->delete();
            return $category;
        }

        return null;
    }
}
