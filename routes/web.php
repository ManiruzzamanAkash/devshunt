<?php

use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\HomePageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomePageController::class, 'homePage'])->name('index');
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
