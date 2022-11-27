@extends('backend.auth.layout')

@section('admin_auth_content')
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Sign In</h1>
        </div>
        @include('backend.partials.messages')
        <form method="POST" class="user" action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control form-control-user" name="email" aria-describedby="emailHelp"
                    placeholder="Enter Email Address...">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                    <label class="custom-control-label" for="remember">Remember Me</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Login
            </button>
        </form>
        <hr>
        <div class="text-center">
            <a class="small" href="{{ route('admin.forget_password') }}">Forgot Password?</a>
        </div>
    </div>
@endsection
