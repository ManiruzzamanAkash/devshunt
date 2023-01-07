<?php

namespace App\DataTables;

use App\Models\Course;
use App\Models\Lesson;
use App\Repositories\CourseLectureRepository;
use App\Repositories\CourseRepository;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CourseLectureDataTable extends DataTable
{
    private Course $course;

    public function __construct(
        private CourseRepository $courseRepository,
        private CourseLectureRepository $courseLectureRepository
    ) {
        $this->courseRepository = $courseRepository;
        $this->courseLectureRepository = $courseLectureRepository;
    }

    public function setCourse(Course $course)
    {
        $this->course = $course;
    }

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {

        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function (Lesson $lesson) {
                $html = '<a class="btn btn-link text-info" href="' . route('admin.lessons.edit', [$this->course->id, $lesson->id]) . '"><i class="fa fa-pencil"></i></a>';
                $html .= '<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#deleteCourseLecture' . $lesson->id . '" text-danger"><i class="fa fa-trash"></i></button>';
                $html .= '
                <div class="modal fade" id="deleteCourseLecture' . $lesson->id . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Are you sure?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Are you sure to delete category - <b>' . $lesson->title . '</b>
                            </p>
                            <form action="' . route('admin.lessons.destroy', [$this->course->id, $lesson->id]) . '" method="POST">
                                ' . csrf_field() . method_field('DELETE') . '

                                <button type="submit" class="btn btn-danger">Confirm Delete</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                ';
                return $html;
            })
            ->editColumn('chapter_id', function (Lesson $lesson) {
                if (isset($lesson->chapter->title)) {
                    return '<a href="' . route('admin.categories.edit', $lesson->chapter->id) . '">' . $lesson->chapter->title . '</>';
                }

                return '--';
            })
            ->editColumn('status', function (Lesson $lesson) {
                return $lesson->status ? '<span class="bg-success text-white text-sm p-1">Active</span>' : '<span class="bg-danger text-white text-sm p-1">Inactive</span>';
            })
            ->editColumn('updated_at', function (Lesson $lesson) {
                return $lesson->created_at->diffForHumans();
            })
            ->rawColumns(['action', 'chapter_id', 'status']);
    }

    public function query(Lesson $model): QueryBuilder
    {
        return $this->courseLectureRepository->get(['course' => $this->course, 'is_query' => true]);
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('course-lecture-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                // Button::make('add'),
                // Button::make('excel'),
                // Button::make('csv'),
                // Button::make('pdf'),
                // Button::make('print'),
                // Button::make('reset'),
                // Button::make('reload'),
            ]);
    }

    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title('Sl no')->searchable(false)->orderable(false),
            Column::make('title')->title('Lesson Name'),
            Column::make('chapter_id')->title('Chapter'),
            Column::make('priority')->title('Priority'),
            Column::make('status')->title('Status'),
            Column::make('total_view')->title('Total View'),
            Column::make('updated_at')->title('Last updated'),
            Column::make('action')
                ->title('Action')
                ->searchable(false)
                ->orderable(false)
                ->printable(false),
        ];
    }

    protected function filename(): string
    {
        return 'Course-Lectures-' . date('YmdHis');
    }
}
