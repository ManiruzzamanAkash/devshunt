<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\CourseDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseCreateRequest;
use App\Models\Course;
use App\Repositories\CategoryRepository;
use App\Repositories\CourseRepository;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function __construct(private CourseRepository $courseRepository, private CategoryRepository $categoryRepository)
    {
        $this->courseRepository = $courseRepository;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CourseDataTable $dataTable)
    {
        if (!Auth::user()->hasPermissionTo('course.view')) {
            abort(403, 'You are not authorized to view course');
        }

        return $dataTable->render('backend.pages.course.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create(): Renderable
    {
        if (!Auth::user()->hasPermissionTo('course.create')) {
            abort(403, 'You are not authorized to create course');
        }

        // $categories =  $this->categoryRepository->categoryLists();
        return view('backend.pages.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseCreateRequest $request)
    {
        if (!Auth::user()->hasPermissionTo('course.create')) {
            abort(403, 'You are not authorized to create course');
        }

        $course = $this->courseRepository->create($request->all());

        if (!empty($course)) {
            session()->flash('success', 'Course created successfully.');
            return redirect()->route('admin.courses.index');
        }

        session()->flash('error', 'Something went wrong to create a course.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        if (!Auth::user()->hasPermissionTo('course.view')) {
            abort(403, 'You are not authorized to view course');
        }

        $course = $this->courseRepository->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Course $course
     * @return Renderable
     */
    public function edit(Course $course): Renderable
    {
        if (!Auth::user()->hasPermissionTo('course.edit')) {
            abort(403, 'You are not authorized to edit course');
        }

        return view('backend.pages.course.edit', [
            'course' => $course,
            'selectedCategories' => $this->categoryRepository->printCategory($course->category_id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(CourseCreateRequest $request, Course $course)
    {
        if (!Auth::user()->hasPermissionTo('course.edit')) {
            abort(403, 'You are not authorized to edit course');
        }

        $courseUpdated = $this->courseRepository->update($request->except('_token', '_method'), $course->id);

        if (!empty($courseUpdated)) {
            session()->flash('success', 'Course updated successfully.');
            return redirect()->route('admin.courses.index');
        }

        session()->flash('error', 'Something went wrong to update the course.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        if (!Auth::user()->hasPermissionTo('course.delete')) {
            abort(403, 'You are not authorized to delete course');
        }

        if ($this->courseRepository->delete($course)) {
            session()->flash('success', 'Course deleted successfully.');
            return redirect()->route('admin.courses.index');
        }

        session()->flash('error', 'Something went wrong to update the course.');
    }
}
