<?php

namespace App\View\Composers;

use App\Repositories\CategoryRepository;
use Illuminate\View\View;

class CategoryComposer
{
    /**
     * The category repository implementation.
     *
     * @var \App\Repositories\CategoryRepository
     */
    protected $category;

    /**
     * Create a new category composer.
     *
     * @param  \App\Repositories\CategoryRepository  $category
     * @return void
     */
    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $categories = $this->category->categoryLists();
        $view->with('categories', $categories);
        $view->with('printCategories', $this->category->selectOptionsCategory($categories));
    }
}
