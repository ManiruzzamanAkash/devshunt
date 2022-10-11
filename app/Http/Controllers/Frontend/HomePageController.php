<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class HomePageController extends Controller
{
    public function homePage(): Renderable
    {
        return view('index');
    }
}
