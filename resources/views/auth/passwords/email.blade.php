@extends('layouts.auth')

@section('title', __('Reset Password'))
@section('auth-title', __('Reset Password'))
@section('auth-subtitle', __('We will send a secure password reset link to your email address.'))

@section('auth-content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group mb-4">
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <button type="submit" class="btn btn-warning btn-round px-4">{{ __('Send Password Reset Link') }}</button>
    </form>
@endsection
