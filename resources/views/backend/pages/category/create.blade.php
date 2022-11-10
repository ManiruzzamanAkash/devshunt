@extends('backend.layouts.master')

@section('title')
    New Category
@endsection

@section('admin-content')
    <div class="card card-body">
        <form action="{{ route('admin.categories.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter category name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
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
