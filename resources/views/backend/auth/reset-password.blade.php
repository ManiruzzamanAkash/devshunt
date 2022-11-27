@extends('backend.auth.layout')

@section('admin_auth_content')
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Reset your password</h1>
        </div>
        @include('backend.partials.messages')
        <form class="user" method="POST" action="{{ route('admin.password.reset.submit') }}">
            @csrf
            <input type="hidden" name="token" value="{{ request()->token }}">
            <div class="form-group">
                <input type="email" name="email" class="form-control form-control-user" id="email" value="{{ request()->email }}"
                    placeholder="Enter Email Address...">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control form-control-user" id="password"
                    placeholder="Enter password">
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control form-control-user"
                    id="password_confirmation" placeholder="Enter password">
            </div>

            <button type="submit" class="btn btn-primary btn-user btn-block">
                Change Password
            </button>
        </form>
    </div>
@endsection
