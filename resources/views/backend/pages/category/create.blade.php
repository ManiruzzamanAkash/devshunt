@extends('backend.layouts.master')

@section('title')
    New Category
@endsection

@section('page-right-side')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Categories</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create New category</li>
        </ol>
    </nav>
@endsection

@section('admin-content')
@section('admin-content')
    <div class="card card-body">
        <form action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label for="name" class="form-label">
                        Name
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" name="name" id="name"
                        placeholder="Enter category name" required>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="parent_id" class="form-label">
                        Parent Category <span class="text-info">(optional)</span>
                    </label>
                    <select name="parent_id" id="parent_id" class="form-control">
                        {!! $parentCategories !!}
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="logo" class="form-label">
                        Logo image <span class="text-info">(optional)</span>
                    </label>
                    <input type="file" name="logo" id="logo" class="form-control">
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <label for="priority" class="form-label">
                        Priority
                        <span class="text-info">(optional)</span>
                    </label>
                    <input type="number" class="form-control" name="priority" id="priority"
                        placeholder="Enter category priority" value="10">
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <label for="enable_homepage" class="form-label">
                        Enable homepage
                        <span class="text-info">(optional)</span>
                    </label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="enable_homepage" id="enable_homepage"
                            value="1" checked>
                        <label class="form-check-label" for="enable_homepage">Click to enable in homepage</label>
                    </div>
                </div>
                <div class="col-12 col-md-12 mb-3">
                    <label for="editor" class="form-label">
                        Description
                        <span class="text-info">(optional)</span>
                    </label>
                    <textarea class="form-control" name="description" id="editor" rows="3"></textarea>
                </div>
            </div>
            <div class="mb-3">
                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary mr-3">
                    Cancel
                </a>

                <button type="submit" class="btn btn-success">
                    Save
                </button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
@endsection
