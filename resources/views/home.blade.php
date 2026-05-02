@extends('layouts.front')
@section('content')
  <div class="page-header section-dark" style="background-image: url('https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=1600&q=80')">
    <div class="filter"></div>
    <div class="content-center">
      <div class="container">
        <div class="title-brand">
          <h1 class="presentation-title">Discover Egypt</h1>
          <div class="fog-low">
            <img src="./assets/img/fog-low.png" alt="">
          </div>
        </div>
        <h2 class="presentation-subtitle text-center">Timeless heritage, unforgettable journeys</h2>
      </div>
    </div>
    <div class="moving-clouds" style="background-image: url('./assets/img/clouds.png'); "></div>
    <h6 class="category category-absolute">Plan your trip — Explore destinations</h6>
  </div>

  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Top Destinations</h2>
          <p class="description">Handpicked places across Egypt — history, culture and adventure.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-plain">
            <div class="card-header">
              <img src="https://images.unsplash.com/photo-1549399540-1c7d98b7c7c9?auto=format&fit=crop&w=800&q=60" class="img-raised rounded" style="width:100%" alt="Cairo">
            </div>
            <div class="card-body">
              <h4 class="card-title">Cairo</h4>
              <p class="card-description">Bustling capital, the Egyptian Museum, and Nile-side life.</p>
              <a href="#" class="btn btn-primary btn-round">Explore</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card card-plain">
            <div class="card-header">
              <img src="https://images.unsplash.com/photo-1535905748047-14f7f9d3b9a7?auto=format&fit=crop&w=800&q=60" class="img-raised rounded" style="width:100%" alt="Luxor">
            </div>
            <div class="card-body">
              <h4 class="card-title">Luxor</h4>
              <p class="card-description">Valley of the Kings, Karnak Temple and ancient wonders.</p>
              <a href="#" class="btn btn-primary btn-round">Explore</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card card-plain">
            <div class="card-header">
              <img src="https://images.unsplash.com/photo-1505765058393-2f8d7a7b0b9b?auto=format&fit=crop&w=800&q=60" class="img-raised rounded" style="width:100%" alt="Aswan">
            </div>
            <div class="card-body">
              <h4 class="card-title">Aswan</h4>
              <p class="card-description">Relaxing river views, Philae Temple, and Nubian culture.</p>
              <a href="#" class="btn btn-primary btn-round">Explore</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-dark text-center">
    <div class="container">
      <h3 class="title">Ready to travel?</h3>
      <p class="description">Find curated trips and local experiences crafted for your journey.</p>
      <a href="#" class="btn btn-danger btn-round btn-lg">Plan Your Trip</a>
    </div>
  </div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
