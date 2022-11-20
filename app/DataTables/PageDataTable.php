<?php

namespace App\DataTables;

use App\Models\Page;
use App\Repositories\PageRepository;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PageDataTable extends DataTable
{
    public function __construct(private PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function (Page $page) {
                $html = '<a class="btn btn-link text-info" href="' . route('admin.pages.edit', $page->id) . '"><i class="fa fa-pencil"></i></a>';
                $html .= '<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#deletePage' . $page->id . '" text-danger"><i class="fa fa-trash"></i></button>';
                $html .= '
                <div class="modal fade" id="deletePage' . $page->id . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Are you sure?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Are you sure to delete this page - <b>' . $page->title . '</b>
                            </p>
                            <form action="' . route('admin.pages.destroy', $page->id) . '" method="POST">
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
            ->editColumn('title', function (Page $page) {
                $html = $page->title;
                // $html .= '<br /> <a class="btn btn-link text-primary" target="_blank" href="' . route('categories.show', $page->slug) . '">View</a>';

                return $html;
            })
            ->editColumn('created_at', function (Page $page) {
                return $page->created_at->format('Y-m-d h:s:i');
            })
            ->editColumn('updated_at', function (Page $page) {
                return $page->created_at->diffForHumans();
            })
            ->rawColumns(['title', 'action']);
    }

    public function query(Page $model): QueryBuilder
    {
        return $this->pageRepository->get(['is_query' => true]);
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('page-table')
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
            Column::make('title')->title('Page title'),
            Column::make('slug')->title('Page slug'),
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
        return 'Page-' . date('YmdHis');
    }
}
