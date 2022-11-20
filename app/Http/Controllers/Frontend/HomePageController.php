<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use Illuminate\Contracts\Support\Renderable;

class HomePageController extends Controller
{
    public $category;

    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }

    public function homePage(): Renderable
    {
        return view('index', [
            'homepageCategories' => $this->category->getHomepageCategories(10)
        ]);
    }
}
