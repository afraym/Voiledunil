@extends('layouts.front')
@section('content')
  <div class="page-header section-dark" style="background-image: url('./assets/img/aswan.jpg')">
    <div class="filter"></div>
    <div class="content-center">
      <div class="container">
        <div class="title-brand">
          <h1 class="presentation-title">Discover Egypt</h1>
          <div class="fog-low">
            <img src="./assets/img/fog-low.png" alt="">
          </div>
          <div class="fog-low right">
            {{-- <img src="./assets/img/fog-low.png" alt=""> --}}
          </div>
        </div>
        <h2 class="presentation-subtitle text-center">Timeless heritage, unforgettable journeys</h2>

        <!-- Search widget: Trips / Hotels / To Do / Events / Eat/Drink -->
        <div class="container mt-4" style="position: relative; z-index: 100;">
          <div class="card card-raised" style="border-radius:14px; position: relative; z-index: 101;">
            <style>
              .widget-card { position: relative; z-index: 10; }
              .widget-card .input-group input,
              .widget-card .input-group select,
              .widget-card .form-control { pointer-events: auto !important; }
              .widget-card button { pointer-events: auto !important; }
              .nav-link.active { background-color: #f59b4a !important; color: white !important; }
              .tab-content { display: none; }
              .tab-content.active { display: block; }
              .city-btn { border: 1px solid #ddd; border-radius: 20px; padding: 6px 14px; margin: 4px; background: #f5f5f5; cursor: pointer; font-size: 12px; transition: all 0.3s; }
              .city-btn:hover { background: #f59b4a; color: white; border-color: #f59b4a; }
              .city-btn.is-active { background: #f59b4a; color: white; border-color: #f59b4a; }
              .popular-cities { margin-top: 12px; text-align: center; }
              .search-btn-large { width: 100%; padding: 10px 18px; font-size: 15px; margin-top: 12px; }
              .hotels-compact { padding-top: 12px; }
              .hotels-compact .form-control { height: 40px; padding-top: 8px; padding-bottom: 8px; }
              .hotels-compact .input-group-text { padding: 0.5rem 0.75rem; }
              .hotels-compact .row { margin-left: -8px; margin-right: -8px; }
              .hotels-compact .col-md-6,
              .hotels-compact .col-md-4 { padding-left: 8px; padding-right: 8px; }
            </style>
            <div class="card-body">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active btn-round tab-link" href="#" data-tab="trips">Trips</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn-round tab-link" href="#" data-tab="hotels">Hotels</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn-round tab-link" href="#" data-tab="todo">To Do</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn-round tab-link" href="#" data-tab="events">Events</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn-round tab-link" href="#" data-tab="eatdrink">Eat/Drink</a>
                </li>
              </ul>

              <!-- Trips Tab -->
              <div id="trips" class="tab-content active widget-card">
                <div class="row align-items-center mt-3">
                  <div class="col-md-4">
                    <div class="input-group" id="datetimepicker">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="nc-icon nc-calendar-60"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Select date" style="z-index: 11; position: relative; cursor: pointer;" />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="nc-icon nc-single-02"></i></span>
                      </div>
                      <select class="form-control" id="guestsSelect" style="z-index: 11; position: relative; cursor: pointer;">
                        <option>0 Guests</option>
                        <option>1 Guest</option>
                        <option>2 Guests</option>
                        <option>3+ Guests</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 text-right">
                    <button class="btn btn-warning btn-round" style="z-index: 11; position: relative; cursor: pointer;">Search</button>
                  </div>
                </div>
              </div>

              <!-- Hotels Tab -->
              <div id="hotels" class="tab-content widget-card hotels-compact">
                <div class="mt-2">
                  <h6 style="font-size: 12px; color: #999; text-transform: uppercase; margin-bottom: 12px;">City Search</h6>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nc-icon nc-pin" style="font-size: 16px;"></i></span>
                    </div>
                    <input type="text" id="hotelCitySearch" class="form-control" placeholder="Search cities" style="z-index: 11; position: relative; cursor: pointer;" />
                  </div>
                  <div class="popular-cities">
                    <h6 style="font-size: 12px; color: #999; text-transform: uppercase; margin-bottom: 6px;">Popular</h6>
                    <button class="city-btn" type="button" data-city="Cairo">Cairo</button>
                    <button class="city-btn" type="button" data-city="Alexandria">Alexandria</button>
                    <button class="city-btn" type="button" data-city="Sharm el Sheikh">Sharm el Sheikh</button>
                    <button class="city-btn" type="button" data-city="Luxor">Luxor</button>
                    <button class="city-btn" type="button" data-city="Aswan">Aswan</button>
                    <button class="city-btn" type="button" data-city="Giza">Giza</button>
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col-md-6">
                    <div class="input-group" id="datetimepickerFrom">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="nc-icon nc-calendar-60"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Select date" style="z-index: 11; position: relative; cursor: pointer;" />
                      <small style="position: absolute; bottom: -18px; left: 0; color: #999;">From</small>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group" id="datetimepickerTo">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="nc-icon nc-check-2"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Select date" style="z-index: 11; position: relative; cursor: pointer;" />
                      <small style="position: absolute; bottom: -18px; left: 0; color: #999;">To</small>
                    </div>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-4 ml-auto">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="nc-icon nc-single-02"></i></span>
                      </div>
                      <select class="form-control" style="z-index: 11; position: relative; cursor: pointer;">
                        <option>0 Guests</option>
                        <option>1 Guest</option>
                        <option>2 Guests</option>
                        <option>3+ Guests</option>
                      </select>
                    </div>
                  </div>
                </div>

                <button class="btn btn-warning search-btn-large" style="z-index: 11; position: relative; cursor: pointer;">
                  <i class="fa fa-search"></i> SEARCH
                </button>
              </div>

              <!-- Other Tabs Placeholder -->
              <div id="todo" class="tab-content widget-card" style="padding: 20px; text-align: center;">
                <p>To Do content coming soon</p>
              </div>
              <div id="events" class="tab-content widget-card" style="padding: 20px; text-align: center;">
                <p>Events content coming soon</p>
              </div>
              <div id="eatdrink" class="tab-content widget-card" style="padding: 20px; text-align: center;">
                <p>Eat/Drink content coming soon</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="moving-clouds" style="background-image: url('./assets/img/clouds.png'); pointer-events: none;"></div>
    
    <!-- Browse Categories Heading - Overlay -->
    <div style="position: absolute; bottom: -50px; left: 50%; transform: translateX(-50%); z-index: 102; text-align: center; width: 100%;">
      <h3 style="font-size: 20px; margin: 0; color: white; text-transform: uppercase; font-weight: 600; letter-spacing: 2px; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">OR BROWSE CATEGORIES</h3>
    </div>
    
    {{-- <h6 class="category category-absolute">Designed and coded by
      <a href="https://www.creative-tim.com" target="_blank">
        <img src="./assets/img/creative-tim-white-slim2.png" class="creative-tim-logo">
      </a>
    </h6> --}}
  </div>

  <!-- Browse Categories Cards Section -->
  <div class="section" style="margin-top: -110px; padding-top: 0; padding-bottom: 60px; background: transparent; position: relative; z-index: 103;">
    <div class="container">
      <style>
        .category-card {
          background: white;
          border-radius: 16px;
          padding: 30px 20px;
          text-align: center;
          box-shadow: 0 4px 12px rgba(0,0,0,0.08);
          transition: transform 0.3s, box-shadow 0.3s;
          cursor: pointer;
          height: 100%;
        }
        .category-card:hover {
          transform: translateY(-5px);
          box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }
        .category-icon {
          width: 80px;
          height: 80px;
          margin: 0 auto 20px;
          border-radius: 50%;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 36px;
          color: white;
          line-height: 1;
        }
        .category-icon i {
          display: block;
          width: 100%;
          text-align: center;
          line-height: 1;
        }
        .category-icon.teal { background-color: #a8d5d8; }
        .category-icon.orange { background-color: #f5b86d; }
        .category-icon.blue { background-color: #a8c8e8; }
        .category-icon.tan { background-color: #d4c5a0; }
        .category-icon.purple { background-color: #c4b5e8; }
        .category-name {
          font-size: 16px;
          font-weight: 500;
          color: #333;
        }
      </style>

      <!-- First Row -->
      <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="category-card">
            <div class="category-icon teal">
              <i class="fa fa-university"></i>
            </div>
            <div class="category-name">Ancient Egypt</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="category-card">
            <div class="category-icon orange">
              <i class="fa fa-umbrella"></i>
            </div>
            <div class="category-name">Beaches</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="category-card">
            <div class="category-icon blue">
              <i class="fa fa-ship"></i>
            </div>
            <div class="category-name">Cruises</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="category-card">
            <div class="category-icon tan">
              <i class="fa fa-tree"></i>
            </div>
            <div class="category-name">Oases & Deserts</div>
          </div>
        </div>
      </div>

      <!-- Second Row -->
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="category-card">
            <div class="category-icon teal">
              <i class="fa fa-mosque"></i>
            </div>
            <div class="category-name">Islamic</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="category-card">
            <div class="category-icon purple">
              <i class="fa fa-gopuram"></i>
            </div>
            <div class="category-name">Coptic</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="category-card">
            <div class="category-icon blue">
              <i class="fa fa-landmark"></i>
            </div>
            <div class="category-name">Museums</div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="category-card">
            <div class="category-icon teal">
              <i class="fa fa-heart"></i>
            </div>
            <div class="category-name">Outdoor Sports</div>
          </div>
        </div>
      </div>

      <!-- Third Row - Shopping -->
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 mx-auto" style="float: none;">
          <div class="category-card">
            <div class="category-icon blue">
              <i class="fa fa-shopping-bag"></i>
            </div>
            <div class="category-name">Shopping</div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection