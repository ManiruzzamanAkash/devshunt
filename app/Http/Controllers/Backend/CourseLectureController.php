<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\CourseDataTable;
use App\DataTables\CourseLectureDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseCreateRequest;
use App\Http\Requests\CourseLectureCreateRequest;
use App\Models\Course;
use App\Models\Lesson;
use App\Repositories\CategoryRepository;
use App\Repositories\ChapterRepository;
use App\Repositories\CourseLectureRepository;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;

class CourseLectureController extends Controller
{
    public function __construct(
        private CourseLectureRepository $courseLectureRepository,
        private CategoryRepository $categoryRepository,
        private ChapterRepository $chapterRepository,
    ) {
        $this->courseLectureRepository = $courseLectureRepository;
        $this->categoryRepository = $categoryRepository;
        $this->chapterRepository = $chapterRepository;
    }

    public function index(Course $course, CourseLectureDataTable $dataTable)
    {
        if (!Auth::user()->hasPermissionTo('lecture.view')) {
            abort(403, 'You are not authorized to view lecture');
        }

        $dataTable->setCourse($course);

        return $dataTable->render('backend.pages.lecture.index', compact('course'));
    }

    public function create(Course $course): Renderable
    {
        if (!Auth::user()->hasPermissionTo('lecture.create')) {
            abort(403, 'You are not authorized to create lecture');
        }

        return view('backend.pages.lecture.create', [
            'course' => $course,
            'types' => $this->courseLectureRepository->getLessonTypes(),
            'labels' => $this->courseLectureRepository->getLessonLabels(),
            'chapters' => $this->chapterRepository->get([
                'course' => $course
            ])
        ]);
    }

    public function store(Course $course, CourseLectureCreateRequest $request)
    {
        if (!Auth::user()->hasPermissionTo('lecture.create')) {
            abort(403, 'You are not authorized to create lecture');
        }

        $lecture = $this->courseLectureRepository->create(
            array_merge($request->all(), ['course_id' => $course->id])
        );

        if (!empty($lecture)) {
            session()->flash('success', 'Course lecture created successfully.');
            return redirect()->route('admin.lessons.index', $course->id);
        }

        session()->flash('error', 'Something went wrong to create a lecture.');
    }

    public function show(int $id)
    {
        if (!Auth::user()->hasPermissionTo('lecture.view')) {
            abort(403, 'You are not authorized to view lecture');
        }

        $course = $this->courseLectureRepository->show($id);
    }

    public function edit(Course $course, Lesson $lesson): Renderable
    {
        if (!Auth::user()->hasPermissionTo('lecture.edit')) {
            abort(403, 'You are not authorized to edit lecture');
        }

        return view('backend.pages.lecture.edit', [
            'course' => $course,
            'lesson' => $lesson,
            'types' => $this->courseLectureRepository->getLessonTypes(),
            'labels' => $this->courseLectureRepository->getLessonLabels(),
            'chapters' => $this->chapterRepository->get([
                'course' => $course
            ])
        ]);
    }

    public function update(
        CourseLectureCreateRequest $request,
        Course $course,
        Lesson $lesson
    ) {
        if (!Auth::user()->hasPermissionTo('lecture.edit')) {
            abort(403, 'You are not authorized to edit lecture');
        }

        $lessonUpdated = $this->courseLectureRepository->update(
            $request->except('_token', '_method'),
            $lesson->id
        );

        if (!empty($lessonUpdated)) {
            session()->flash('success', 'Course lecture updated successfully.');
            return redirect()->route('admin.lessons.index', $course->id);
        }

        session()->flash('error', 'Something went wrong to update the lecture.');
    }

    public function destroy(Course $course, Lesson $lesson)
    {
        if (!Auth::user()->hasPermissionTo('lecture.delete')) {
            abort(403, 'You are not authorized to delete lecture');
        }

        if ($this->courseLectureRepository->delete($lesson)) {
            session()->flash('success', 'Course lecture deleted successfully.');
            return redirect()->route('admin.lessons.index', $course->id);
        }

        session()->flash('error', 'Something went wrong to delete the lecture.');
    }
}
