@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title here')
@section('content')

<div class="login-box bg-white box-shadow border-radius-10">
  <div class="login-title">
    <h2 class="text-center text-primary">Create Seller Account</h2>
  </div>
  <form action="{{ route('seller.create') }}" method="POST">
    @csrf
    <x-alert.form-alert/>

    <div class="form-group">
      <label for="">Full name: </label>
      <input type="text" class="form-control" placeholder="Enter full name" name="name" value="{{ old('name') }}">
      @error('name')
        <span class="text-danger ml-2">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="">Email: </label>
      <input type="text" class="form-control" placeholder="Enter email address" name="email" value="{{ old('email') }}">
      @error('email')
        <span class="text-danger ml-2">{{ $message }}</span>
      @enderror
    </div>

    <div class="form-group">
      <label for="">Password: </label>
      <input type="password" name="password" class="form-control" placeholder="Enter password">
      @error('password')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    <div class="form-group">
      <label for="">Confirm Password: </label>
      <input type="password" name="confirm_password" class="form-control" placeholder="Retype password">
      @error('confirm_password')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="input-group mb-0">
          <button type="submit" class="btn btn-primary btn-lg btn-block">Create Account</button>
        </div>
        <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373" style="color:rgb(112,115,115);">OR</div>
        <div class="input-group mb-0">
          <a href="{{ route('seller.login') }}" class="btn btn-outline-primary btn-lg btn-block">Sign In</a>
        </div>
      </div>
    </div>


  </form>
</div>

@endsection