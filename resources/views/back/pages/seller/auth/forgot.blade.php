@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title here')
@section('content')

<div class="login-box bg-white box-shadow border-radius-10">
    <div class="login-title">
        <h2 class="text-center text-primary">Forgot Password</h2>
    </div>
    <h6 class="mb-20">
        Enter your email address to reset your password
    </h6>
    <form action="{{ route('seller.send-password-reset-link') }}" method="POST">
        @csrf
        <x-alert.form-alert/>
        <div class="input-group custom">
            <input type="text" class="form-control form-control-lg" placeholder="Email" name="email" value="{{ old('email') }}">
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
            </div>
        </div>
        @error('email')
            <span class="text-danger d-block" style="margin-top: -25px;margin-bottom:5px;">{{ $message }}</span>
        @enderror
        <div class="row align-items-center">
            <div class="col-5">
                <div class="input-group mb-0">
                  
                  
                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
                
                  
                </div>
            </div>
            <div class="col-2">
                <div class="font-16 weight-600 text-center" data-color="#707373" style="color: rgb(112, 115, 115);">
                    OR
                </div>
            </div>
            <div class="col-5">
                <div class="input-group mb-0">
                    <a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('seller.login') }}">Login</a>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection