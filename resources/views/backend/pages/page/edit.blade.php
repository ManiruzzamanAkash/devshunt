@extends('backend.layouts.master')

@section('title')
    Edit Page - {{ $page->title }}
@endsection

@section('page-right-side')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit page</li>
        </ol>
    </nav>
@endsection

@section('admin-content')
@section('admin-content')
    <div class="card card-body">
        <form action="{{ route('admin.pages.update', $page->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $page->id }}">
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label for="title" class="form-label">
                        Title
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" name="title" id="title"
                        placeholder="Enter page title" value="{{ $page->title }}" required>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="slug" class="form-label">
                        Slug
                        <span class="text-info">(optional)</span>
                    </label>
                    <input type="text" class="form-control" name="slug" id="slug"
                        placeholder="Enter page slug (if needs modified)" value="{{ $page->slug }}" required>
                </div>
                <div class="col-12 col-md-12 mb-3">
                    <label for="editor" class="form-label">
                        Description
                        <span class="text-info">(optional)</span>
                    </label>
                    <textarea class="form-control" name="description" id="editor" rows="3">{!! $page->description !!}</textarea>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="meta_keywords" class="form-label">
                        Meta keywords
                        <span class="text-info">(optional)</span>
                    </label>
                    <textarea class="form-control" name="meta_keywords" id="meta_keywords" rows="2">{{ $page->meta_keywords }}</textarea>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="meta_description" class="form-label">
                        Meta description
                        <span class="text-info">(optional)</span>
                    </label>
                    <textarea class="form-control" name="meta_description" id="meta_description" rows="2">{{ $page->meta_description }}</textarea>
                </div>
            </div>
            <div class="mb-3">
                <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary mr-3">
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
