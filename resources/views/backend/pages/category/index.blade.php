@extends('backend.layouts.master')

@section('title')
    Categories
@endsection

@section('page-right-side')
    <a href="{{ route('admin.categories.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus-circle fa-sm text-white-50"></i>
        New Category
    </a>
@endsection

@section('admin-content')
    <div class="card card-body">
        {{ $dataTable->table() }}
    </div>
@endsection

@section('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endsection
