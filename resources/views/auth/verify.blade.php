@extends('layouts.auth')

@section('title', __('Verify Your Email Address'))
@section('auth-title', __('Verify Your Email Address'))
@section('auth-subtitle', __('Check your inbox for the verification link we sent.'))

@section('auth-content')
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif

    <p class="text-muted mb-3">{{ __('Before proceeding, please check your email for a verification link.') }}</p>

    <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn btn-warning btn-round px-4">{{ __('click here to request another') }}</button>
    </form>
@endsection
