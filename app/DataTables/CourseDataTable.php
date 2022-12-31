<?php

namespace App\DataTables;

use App\Models\Course;
use App\Repositories\CourseRepository;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CourseDataTable extends DataTable
{
    public function __construct(private CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function (Course $course) {
                $html = '<a class="btn btn-link text-info" href="' . route('admin.courses.edit', $course->id) . '"><i class="fa fa-pencil"></i></a>';
                $html .= '<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#deleteCourse' . $course->id . '" text-danger"><i class="fa fa-trash"></i></button>';
                $html .= '
                <div class="modal fade" id="deleteCourse' . $course->id . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Are you sure?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Are you sure to delete category - <b>' . $course->title . '</b>
                            </p>
                            <form action="' . route('admin.courses.destroy', $course->id) . '" method="POST">
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
            ->editColumn('name', function (Course $course) {
                $html = $course->title;
                $html .= '<br /> <a class="btn btn-link text-primary" target="_blank" href="' . route('courses.show', $course->slug) . '">View</a>';

                return $html;
            })
            ->editColumn('category_id', function (Course $course) {
                if (isset($course->category->name)) {
                    return '<a href="' . route('admin.categories.edit', $course->category->id) . '">' . $course->category->name . '</>';
                }

                return '--';
            })
            ->editColumn('banner', function (Course $course) {
                if (!empty($course->banner)) {
                    return '<img src="' . Storage::url($course->banner) . '" alt="" width="100">';
                }

                return '--';
            })
            ->editColumn('status', function (Course $course) {
                return $course->status ? '<span class="bg-success text-white text-sm p-1">Active</span>' : '<span class="bg-danger text-white text-sm p-1">Inactive</span>';
            })
            ->editColumn('price', function (Course $course) {
                if ($course->is_free) {
                    return 'Free';
                }

                if (!empty($course->offer_price)) {
                    return '<del>' . $course->price . '</del> <br>' . $course->offer_price;
                }

                return $course->price;
             })
            ->editColumn('created_at', function (Course $course) {
                return $course->created_at->format('Y-m-d h:s:i');
            })
            ->editColumn('updated_at', function (Course $course) {
                return $course->created_at->diffForHumans();
            })
            ->rawColumns(['title', 'action', 'category_id', 'banner', 'price', 'status']);
    }

    public function query(Course $model): QueryBuilder
    {
        return $this->courseRepository->get(['is_query' => true]);
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('course-table')
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
            Column::make('title')->title('Course Name'),
            Column::make('category_id')->title('Category'),
            Column::make('banner')->title('Banner'),
            Column::make('price')->title('Price'),
            Column::make('status')->title('Status'),
            Column::make('total_view')->title('Total View'),
            Column::make('total_enrolled')->title('Total enrolled'),
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
        return 'Course-' . date('YmdHis');
    }
}
