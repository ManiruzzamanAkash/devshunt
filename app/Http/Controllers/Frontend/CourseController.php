<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(): Renderable
    {
        return view('courses.index');
    }

    public function show(string $slug): Renderable
    {
        return view('courses.show');
    }
}
