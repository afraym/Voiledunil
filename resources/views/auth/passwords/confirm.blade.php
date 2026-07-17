@extends('layouts.auth')

@section('title', __('Confirm Password'))
@section('auth-title', __('Confirm Password'))
@section('auth-subtitle', __('Please confirm your password before continuing.'))

@section('auth-content')
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="form-group mb-4">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <div class="d-flex flex-wrap align-items-center justify-content-between" style="gap: 12px;">
            <button type="submit" class="btn btn-warning btn-round px-4">{{ __('Confirm Password') }}</button>

            @if (Route::has('password.request'))
                <a class="btn btn-link p-0" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            @endif
        </div>
    </form>
@endsection
