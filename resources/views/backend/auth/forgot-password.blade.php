@extends('backend.auth.layout')

@section('admin_auth_content')
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Forget your password</h1>
        </div>
        @include('backend.partials.messages')
        <form class="user" method="POST" action="{{ route('admin.forget_password.submit') }}">
            @csrf
            <div class="form-group">
                <input type="email" name="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp"
                    placeholder="Enter Email Address...">
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Send Reset Email
            </button>
        </form>
    </div>
@endsection
