@extends('layouts.auth')

@section('title', 'Login')
    
@section('content')
<div class="authentication-inner row">
  <div class="col-lg-4 offset-lg-4 py-3">
    <div class="card shadow-md">
      <div class="card-body">
        <!-- Logo -->
        <div class="text-start pb-4">
          <a href="index.html" class="app-brand-link gap-2">
            <img src="{{ asset('images/logo.svg') }}" alt="">
              <span>👋</span>
          </a>
        </div>
       
        <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label text-muted font-10 text-uppercase">Email or Username</label>
            <input type="text" class="form-control @error('username_email') is-invalid @enderror" id="email" name="username_email" placeholder="Username or Email" value="{{ old('username_email') }}" />
            @error('username_email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
              <label class="form-label text-muted text-uppercase font-10" for="password">Password</label>
              <a href="">
                <small class="font-10">Forgot Password?</small>
              </a>
            </div>
            <div class="input-group input-group-merge">
              <input type="password" name="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror"/>
              <span class="input-group-text cursor-pointer"><i class="mdi mdi-hide"></i></span>
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="mb-3">
            <div class="form-check pl-4">
              <input class="form-check-input" type="checkbox" id="remember-me" />
              <label class="form-check-label text-muted font-12" for="remember-me"> Remember Me </label>
            </div>
          </div>
          <div class="mb-3">
            <button class="btn btn-primary rounded-5 w-100" type="submit">Sign in</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>
</div>
@endsection
