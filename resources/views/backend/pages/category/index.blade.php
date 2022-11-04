@extends('backend.layouts.master')

@section('title')
    Categories
@endsection

@section('admin-content')
    <div class="card card-body">
        {{ $dataTable->table() }}
    </div>
@endsection

@section('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endsection
