@extends('admin.admin-layouts.header')
@section('title','Registration')
@section('content')
<div class="content-wrapper" style="min-height: 511px;">
    <div class="content">
<div class="register-box m-auto pt-5">
<div class="register-logo">
<a href="/admin"><b>Basic</b>&nbsp;English School</a>
</div>
<div class="card">
<div class="card-body register-card-body">
<p class="login-box-msg">Register a new member</p>
<form method="POST" action="{{ route('register') }}">
@csrf
<div class="input-group mb-3">
<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="input-group mb-3">
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="input-group mb-3">
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="row">

<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">Register</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div></div>
@endsection
