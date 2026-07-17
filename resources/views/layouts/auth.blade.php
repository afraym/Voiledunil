@php
  $pageTitle = trim($__env->yieldContent('title', config('app.name', 'Laravel')));
@endphp

@include('front.header')

<div class="page-header section-dark auth-page-header" style="background-image: url('/assets/img/aswan.jpg');">
    <div class="filter"></div>
    <div class="content-center auth-page-shell">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <div class="card card-raised auth-card" style="border-radius: 24px; overflow: hidden; box-shadow: 0 30px 60px rgba(0, 0, 0, 0.28);">
                        <div class="card-body p-4 p-md-5">
                            <div class="text-center mb-4">
                                <span class="badge badge-warning badge-pill px-3 py-2" style="letter-spacing: 0.08em;">{{ __('navigation.brand') }}</span>
                                <h2 class="mt-3 mb-2" style="font-weight: 700;">@yield('auth-title')</h2>
                                <p class="mb-0 text-muted">@yield('auth-subtitle')</p>
                            </div>

                            @yield('auth-content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('front.footer')