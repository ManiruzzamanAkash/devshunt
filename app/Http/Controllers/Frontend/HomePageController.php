<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\CourseRepository;
use Illuminate\Contracts\Support\Renderable;

class HomePageController extends Controller
{
    public function __construct(private CategoryRepository $category, private CourseRepository $course)
    {
        $this->category = $category;
        $this->course = $course;
    }

    public function homePage(): Renderable
    {
        $popularCourses = $this->course->get([
            'order_by' => 'total_view',
            'order'    => 'desc',
            'limit'    => 10,
        ]);

        return view('index', [
            'homepageCategories' => $this->category->getHomepageCategories(8),
            'popularCourses' => $popularCourses,
            'newCourses' => $this->course->get([
                'order_by' => 'id',
                'order'    => 'desc',
                'limit'    => 10,
                'excludes' => $popularCourses->pluck('id') ?? []
             ]),
        ]);
    }
}
