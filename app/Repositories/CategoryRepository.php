<?php

namespace App\Repositories;

use App\Interfaces\CrudInterface;
use App\Interfaces\SlugInterface;
use App\Models\Category;
use Akash\LaravelUniqueSlug\Facades\UniqueSlug;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryRepository implements CrudInterface, SlugInterface
{
    /**
     * Get categories by filtering args.
     */
    public function get(array $args = []): \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder
    {
        $orderBy = empty($args['order_by']) ? 'id' : $args['order_by']; // column name
        $order   = empty($args['order']) ? 'desc' : $args['order']; // asc, desc
        $query   = Category::orderBy($orderBy, $order)
            ->with('parent');

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
        $this->prepareDataForDatabase($data);
        return Category::create($data);
    }

    public function update(array $data, int|Category $category): Category|null
    {
        $category = $this->getCategoryInstance($category);
        $this->prepareDataForDatabase($data, $category);
        $category->update($data);

        // Find the data and return
        return $this->show($category->id);
    }

    public function delete(int|Category $category): Category|null
    {
        $category = $this->getCategoryInstance($category);

        if (!empty($category)) {
            $this->deleteLogo($category);
            $category->delete();
            return $category;
        }

        return null;
    }

    public function printCategory(?int $categoryId = null): string
    {
        $categories = $this->categoryLists();
        return $this->selectOptionsCategory($categories, $categoryId);
    }

    public function selectOptionsCategory(Collection $categories, ?int $categoryId = null): string
    {
        $html = '';
        foreach ($categories as $parent) {
            $selected = $parent->id === $categoryId ? 'selected' : '';
            $html .= '<option ' . $selected . ' value="' . $parent->id . '">' . $parent->name . '</option>';
            foreach ($parent->child as $child1) {
                $selected = $child1->id === $categoryId ? 'selected' : '';
                $html .= '<option ' . $selected . ' value="' . $child1->id . '" > ---- ' . $child1->name . '</option>';
                foreach ($child1->child as $child2) {
                    $selected = $child2->id === $categoryId ? 'selected' : '';
                    $html .= '<option ' . $selected . ' value="' . $child2->id . '">&nbsp;&nbsp;&nbsp;&nbsp; ---- ' . $child2->name . '</option>';
                }
            }
        }

        return $html;
    }

    public function categoryLists()
    {
        $categories = $this->getParentCategories(null);

        foreach ($categories as $parent) {
            $child1Categories = $this->getParentCategories($parent->id);
            $parent->child = $child1Categories;
            foreach ($child1Categories as $child1) {
                $child2Categories = $this->getParentCategories($child1->id);
                $child1->child = $child2Categories;
            }
        }

        return $categories;
    }

    private function getParentCategories(?int $parentId = null)
    {
        return Category::select('id', 'name', 'slug', 'logo', 'priority', 'enable_homepage')
            ->where('parent_id', $parentId)
            ->get();
    }

    private function deleteLogo(Category $category): void
    {
        if (!empty($category->logo) && Storage::exists($category->logo)) {
            Storage::delete($category->logo);
        }
    }

    private function getCategoryInstance(int|Category $category): Category|null
    {
        if (!$category instanceof Category) {
            $category = $this->show($category);
        }

        return $category;
    }

    private function prepareDataForDatabase(array &$data, ?Category $category = null): void
    {
        if (empty($data['slug'])) {
            $data['slug'] = UniqueSlug::generate(Category::class, $data['name'], 'slug');
        }

        if (!empty($data['logo'])) {
            if ($category) {
                $this->deleteLogo($category);
            }

            $image_name = $data['slug'] . '-' . time() . '.' . $data['logo']->extension();
            $data['logo'] = $data['logo']->storePubliclyAs('public', $image_name);
        }

        $data['enable_homepage'] = isset($data['enable_homepage']) ? 1 : 0;
    }

    public function getHomepageCategories(?int $limit = 20)
    {
        return Category::join('courses', 'courses.category_id', 'categories.id')
            ->select(
                'categories.id',
                'categories.name',
                'categories.logo',
                'categories.slug',
                'categories.bg_color',
                DB::raw('(SELECT COUNT(courses.id) FROM courses WHERE courses.category_id = categories.id) as total_course')
            )
            ->groupBy('categories.id')
            ->paginate($limit);
    }
}
