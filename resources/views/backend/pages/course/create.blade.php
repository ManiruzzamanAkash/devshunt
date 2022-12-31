@extends('backend.layouts.master')

@section('title')
    New Course
@endsection

@section('page-right-side')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.courses.index') }}">Courses</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create New course</li>
        </ol>
    </nav>
@endsection

@section('admin-content')
@section('admin-content')
    <div class="card card-body">
        <form action="{{ route('admin.courses.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label for="title" class="form-label">
                        Name
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter course name"
                        required value="{{ old('title') }}">
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <label for="category_id" class="form-label">
                        Category <span class="text-danger">*</span>
                    </label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">--Select--</option>
                        {!! $printCategories !!}
                    </select>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <label for="is_free" class="form-label">
                        Is free ?
                        <span class="text-info">(optional)</span>
                    </label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_free" id="is_free"
                            value="1">
                        <label class="form-check-label" for="is_free">Click to make it free </label>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <label for="banner" class="form-label">
                        Banner image <span class="text-info">(optional)</span>
                    </label>
                    <input type="file" name="banner" id="banner" class="form-control">
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <label for="status" class="form-label">
                        Status <span class="text-danger">*</span>
                    </label>
                    <select name="status" id="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <label for="price" class="form-label">
                        Price
                        <span class="text-info">(optional)</span>
                    </label>
                    <input type="number" class="form-control" name="price" id="price"
                        placeholder="Enter price" value="{{ old('price') || '0' }}">
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <label for="offer_price" class="form-label">
                        Offer Price
                        <span class="text-info">(optional)</span>
                    </label>
                    <input type="number" class="form-control" name="offer_price" id="offer_price"
                        placeholder="Enter offer price" value="{{ old('offer_price') || '0' }}">
                </div>
                <div class="col-12 col-md-12 mb-3">
                    <label for="editor" class="form-label">
                        Description
                        <span class="text-danger">*</span>
                    </label>
                    <textarea class="form-control" name="description" id="editor" rows="3">{!! old('description') !!}</textarea>
                </div>
                <div class="col-6 col-md-6 mb-3">
                    <label for="meta_description" class="form-label">
                        Meta Description
                        <span class="text-info">(optional)</span>
                    </label>
                    <textarea class="form-control" name="meta_description" id="meta_description" rows="2">{!! old('meta_description') !!}</textarea>
                </div>
                <div class="col-6 col-md-6 mb-3">
                    <label for="meta_keywords" class="form-label">
                        Meta Keywords
                        <span class="text-info">(optional)</span>
                    </label>
                    <textarea class="form-control" name="meta_keywords" id="meta_keywords" rows="2">{!! old('meta_keywords') !!}</textarea>
                </div>
                <div class="col-6 col-md-6 mb-3">
                    <label for="external_enroll_link" class="form-label">
                        External enroll link
                        <span class="text-info">(optional)</span>
                    </label>
                    <input type="url" class="form-control" name="external_enroll_link" id="external_enroll_link" value="{{ old('external_enroll_link') }}"/>
                </div>
                <div class="col-3 col-md-3 mb-3">
                    <label for="start_date" class="form-label">
                        Start date
                        <span class="text-info">(optional)</span>
                    </label>
                    <input type="date" class="form-control" name="start_date" id="start_date" value={{ old('start_date') }}/>
                </div>
                <div class="col-3 col-md-3 mb-3">
                    <label for="end_date" class="form-label">
                        End date
                        <span class="text-info">(optional)</span>
                    </label>
                    <input type="date" class="form-control" name="end_date" id="end_date" value="{{ old('end_date') }}"/>
                </div>
            </div>
            <div class="mb-3">
                <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary mr-3">
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
