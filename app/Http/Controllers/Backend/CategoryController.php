<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\CategoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct(private CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryDataTable $dataTable)
    {
        if (!Auth::user()->hasPermissionTo('category.view')) {
            abort(403, 'You are not authorized to view category');
        }

        return $dataTable->render('backend.pages.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create(): Renderable
    {
        if (!Auth::user()->hasPermissionTo('category.create')) {
            abort(403, 'You are not authorized to create category');
        }

        return view('backend.pages.category.create', [
            'parentCategories' => $this->categoryRepository->printCategory()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        if (!Auth::user()->hasPermissionTo('category.create')) {
            abort(403, 'You are not authorized to create category');
        }

        $category = $this->categoryRepository->create($request->all());

        if (!empty($category)) {
            session()->flash('success', 'Category created successfully.');
            return redirect()->route('admin.categories.index');
        }

        session()->flash('error', 'Something went wrong to create a category.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        if (!Auth::user()->hasPermissionTo('category.view')) {
            abort(403, 'You are not authorized to view category');
        }

        $category = $this->categoryRepository->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Category $category
     * @return Renderable
     */
    public function edit(Category $category): Renderable
    {
        if (!Auth::user()->hasPermissionTo('category.edit')) {
            abort(403, 'You are not authorized to edit category');
        }

        return view('backend.pages.category.edit', [
            'category' => $category,
            'parentCategories' => $this->categoryRepository->printCategory($category->parent_id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryCreateRequest $request, Category $category)
    {
        if (!Auth::user()->hasPermissionTo('category.edit')) {
            abort(403, 'You are not authorized to edit category');
        }

        $categoryUpdated = $this->categoryRepository->update($request->except('_token', '_method'), $category->id);

        if (!empty($categoryUpdated)) {
            session()->flash('success', 'Category updated successfully.');
            return redirect()->route('admin.categories.index');
        }

        session()->flash('error', 'Something went wrong to update the category.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if (!Auth::user()->hasPermissionTo('category.delete')) {
            abort(403, 'You are not authorized to delete category');
        }

        if ($this->categoryRepository->delete($category)) {
            session()->flash('success', 'Category deleted successfully.');
            return redirect()->route('admin.categories.index');
        }

        session()->flash('error', 'Something went wrong to update the category.');
    }
}
