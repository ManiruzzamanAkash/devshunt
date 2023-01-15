<?php

use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\CourseEnrollController;
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
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('categories.show');

Route::group(['prefix' => 'courses', 'as' => 'courses.'], function() {
    Route::get('', [CourseController::class, 'index'])->name('index');
    Route::get('/{slug}', [CourseController::class, 'show'])->name('show');
    Route::get('/{course_slug}/{lesson_slug}', [CourseLessonController::class, 'show'])->name('lessons.show');

    Route::middleware('auth')->group(function () {
        Route::post('/enroll-course/{slug}/confirm', [CourseEnrollController::class, 'store'])->name('enroll');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
