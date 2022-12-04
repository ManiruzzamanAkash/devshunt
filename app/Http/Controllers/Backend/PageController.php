<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\PageDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\PageCreateRequest;
use App\Http\Requests\PageUpdateRequest;
use App\Models\Page;
use App\Repositories\PageRepository;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function __construct(private PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PageDataTable $dataTable)
    {
        if (!Auth::user()->hasPermissionTo('page.view')) {
            abort(403, 'You are not authorized to view pages');
        }

        return $dataTable->render('backend.pages.page.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create(): Renderable
    {
        if (!Auth::user()->hasPermissionTo('page.create')) {
            abort(403, 'You are not authorized to create pages');
        }

        return view('backend.pages.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PageCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageCreateRequest $request)
    {
        if (!Auth::user()->hasPermissionTo('page.create')) {
            abort(403, 'You are not authorized to create pages');
        }

        $page = $this->pageRepository->create($request->except('_token'));

        if (!empty($page)) {
            session()->flash('success', 'Page created successfully.');
            return redirect()->route('admin.pages.index');
        }

        session()->flash('error', 'Something went wrong to create a page.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Page $page
     * @return Renderable
     */
    public function edit(Page $page): Renderable
    {
        if (!Auth::user()->hasPermissionTo('page.edit')) {
            abort(403, 'You are not authorized to edit pages');
        }

        return view('backend.pages.page.edit', [
            'page' => $page,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PageUpdateRequest  $request
     * @param  Page               $page
     * @return \Illuminate\Http\Response
     */
    public function update(PageUpdateRequest $request, Page $page)
    {
        if (!Auth::user()->hasPermissionTo('page.edit')) {
            abort(403, 'You are not authorized to edit pages');
        }

        $pageUpdated = $this->pageRepository->update($request->except('_token', '_method'), $page->id);

        if (!empty($pageUpdated)) {
            session()->flash('success', 'Page updated successfully.');
            return redirect()->route('admin.pages.index');
        }

        session()->flash('error', 'Something went wrong to update the page.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        if (!Auth::user()->hasPermissionTo('page.delete')) {
            abort(403, 'You are not authorized to delete pages');
        }

        if ($this->pageRepository->delete($page)) {
            session()->flash('success', 'Page deleted successfully.');
            return redirect()->route('admin.pages.index');
        }

        session()->flash('error', 'Something went wrong to update the page.');
    }
}
