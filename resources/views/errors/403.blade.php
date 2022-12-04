@extends('errors.layout')

@section('title')
    403 - Access Denied
@endsection

@section('error-content')
    <div class="text-center">
        <div class="error mx-auto" data-text="403">403</div>
        <p>Access to this resource on the server is denied</p>
        <hr>
        <p class="mt-2">
            {{ $exception->getMessage() }}
        </p>
        <a href="{{ route('admin.dashboard') }}">Back to Dashboard</a>
        <a href="{{ route('admin.login') }}">Login Again !</a>
    </div>
@endsection
