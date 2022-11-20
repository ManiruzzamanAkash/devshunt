<?php

namespace App\DataTables;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CategoryDataTable extends DataTable
{
    public function __construct(private CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function (Category $category) {
                $html = '<a class="btn btn-link text-info" href="' . route('admin.categories.edit', $category->id) . '"><i class="fa fa-pencil"></i></a>';
                $html .= '<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#deleteCategory' . $category->id . '" text-danger"><i class="fa fa-trash"></i></button>';
                $html .= '
                <div class="modal fade" id="deleteCategory' . $category->id . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Are you sure?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Are you sure to delete category - <b>' . $category->name . '</b>
                            </p>
                            <form action="' . route('admin.categories.destroy', $category->id) . '" method="POST">
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
            ->editColumn('name', function (Category $category) {
                $html = $category->name;
                $html .= '<br /> <a class="btn btn-link text-primary" target="_blank" href="' . route('categories.show', $category->slug) . '">View</a>';

                return $html;
            })
            ->editColumn('parent_id', function (Category $category) {
                if (isset($category->parent->name)) {
                    return '<a href="' . route('admin.categories.edit', $category->parent->id) . '">' . $category->parent->name . '</>';
                }

                return '--';
            })
            ->editColumn('logo', function (Category $category) {
                if (!empty($category->logo)) {
                    return '<img src="' . Storage::url($category->logo) . '" alt="" width="100">';
                }

                return '--';
            })
            ->editColumn('enable_homepage', function (Category $category) {
                return $category->enable_homepage ? 'Yes' : 'No';
            })
            ->editColumn('created_at', function (Category $category) {
                return $category->created_at->format('Y-m-d h:s:i');
            })
            ->editColumn('updated_at', function (Category $category) {
                return $category->created_at->diffForHumans();
            })
            ->rawColumns(['name', 'action', 'parent_id', 'logo']);
    }

    public function query(Category $model): QueryBuilder
    {
        return $this->categoryRepository->get(['is_query' => true]);
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('category-table')
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
            Column::make('name')->title('Category Name'),
            Column::make('parent_id')->title('Parent'),
            Column::make('logo')->title('Logo'),
            Column::make('priority')->title('Priority'),
            Column::make('enable_homepage')->title('Show in homepage'),
            Column::make('created_at')->title('Created'),
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
        return 'Category-' . date('YmdHis');
    }
}
