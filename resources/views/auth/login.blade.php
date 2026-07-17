@extends('layouts.auth')

@section('title', __('Login'))
@section('auth-title', __('Login'))
@section('auth-subtitle', __('Sign in to continue planning your trip and managing your saved experiences.'))

@section('auth-content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group mb-3">
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <div class="form-group form-check mb-4">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
        </div>

        <div class="d-flex flex-wrap align-items-center justify-content-between" style="gap: 12px;">
            <button type="submit" class="btn btn-warning btn-round px-4">{{ __('Login') }}</button>

            @if (Route::has('password.request'))
                <a class="btn btn-link p-0" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            @endif
        </div>
    </form>
@endsection
