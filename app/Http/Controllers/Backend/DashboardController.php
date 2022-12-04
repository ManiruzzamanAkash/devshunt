<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Auth::user()->hasPermissionTo('dashboard.view')) {
            abort(403, 'You are not authorized to view dashboard');
        }

        $countCategories = Category::count();
        return view('backend.pages.index', compact('countCategories'));
    }
}
