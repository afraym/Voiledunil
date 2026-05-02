<!DOCTYPE html>
<html lang="{{ $locale ?? app()->getLocale() }}" dir="{{ in_array($locale ?? app()->getLocale(), ['ar']) ? 'rtl' : 'ltr' }}">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   {{ __('navigation.brand') }} - {{ __('home.title') }}
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  
  <!-- CSS Files -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/assets/css/custom.css" rel="stylesheet" />
  <style>
    .language-switcher {
      margin-left: 15px;
    }
    .language-switcher .dropdown-menu {
      min-width: 150px;
    }
    .language-switcher .dropdown-toggle::after {
      display: none;
    }
    .language-switcher .btn {
      padding: 6px 12px;
      font-size: 12px;
    }
    html[dir="rtl"] .language-switcher {
      margin-left: 0;
      margin-right: 15px;
    }
  </style>
</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/" rel="tooltip" title="Voile Du Nil" data-placement="bottom">
          {{ __('navigation.brand') }} ⛵
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on YouTube" data-placement="bottom" href="https://www.youtube.com/voiledunil" target="_blank">
              <i class="fa-brands fa-youtube"></i>
              <p class="d-lg-none">YouTube</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/voiledunil" target="_blank">
              <i class="fa fa-facebook-square"></i>
              <p class="d-lg-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/voiledunil/" target="_blank">
              <i class="fa fa-instagram"></i>
              <p class="d-lg-none">Instagram</p>
            </a>
          </li>
          <li class="nav-item language-switcher">
            <div class="dropdown">
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ strtoupper($locale ?? app()->getLocale()) }}
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                @foreach($locales ?? ['en', 'fr', 'es', 'de', 'ru', 'ar'] as $lang)
                  <a class="dropdown-item {{ ($locale ?? app()->getLocale()) === $lang ? 'active' : '' }}" href="/{{ $lang }}">
                    @switch($lang)
                      @case('en')
                        🇬🇧 English
                        @break
                      @case('fr')
                        🇫🇷 Français
                        @break
                      @case('es')
                        🇪🇸 Español
                        @break
                      @case('de')
                        🇩🇪 Deutsch
                        @break
                      @case('ru')
                        🇷🇺 Русский
                        @break
                      @case('ar')
                        🇸🇦 العربية
                        @break
                    @endswitch
                  </a>
                @endforeach
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a href="{{ route('login', ['locale' => $locale ?? app()->getLocale()]) }}" class="nav-link"><i class="nc-icon nc-book-bookmark"></i> {{ __('navigation.login') }}</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('register', ['locale' => $locale ?? app()->getLocale()]) }}" class="btn btn-danger btn-round">{{ __('navigation.register') }}</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->