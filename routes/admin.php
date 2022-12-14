<?php

use App\Http\Controllers\Backend\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Backend\Auth\NewPasswordController;
use App\Http\Controllers\Backend\Auth\PasswordResetLinkController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\CourseLectureController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\UsersController;
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

Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.submit');
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('forget-password', [PasswordResetLinkController::class, 'create'])->name('forget_password');
Route::post('forget-password', [PasswordResetLinkController::class, 'store'])->name('forget_password.submit');

Route::get('reset-password', [NewPasswordController::class, 'create'])->name('password.reset');
Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.reset.submit');

Route::middleware('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('pages', PageController::class);
    Route::resource('roles', RolesController::class);
    Route::resource('users', UsersController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('courses/{course}/lessons', CourseLectureController::class);
});
