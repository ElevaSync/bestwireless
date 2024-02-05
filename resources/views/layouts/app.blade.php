<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', env('APP_NAME'))</title>
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawsome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/fav-icon.png') }}">
</head>
<body>
<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="mobile-nav">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo" style="height: 50px" />
                </a>
            </div>
        </div>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="{{ env('APP_NAME') }}" style="height: 50px" />
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link @if(Route::currentRouteName() == 'home') active @endif">Home</a></li>
                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link @if(Route::currentRouteName() == 'about') active @endif">About Us</a></li>
                        <li class="nav-item"><a href="{{ route('branches.state', 'NC') }}" class="nav-link @if(Route::currentRouteName() == 'branches.state' && Route::current()->parameter('state') == 'NC') active @endif">North Carolina</a></li>
                        <li class="nav-item"><a href="{{ route('branches.state', 'VA') }}" class="nav-link @if(Route::currentRouteName() == 'branches.state' && Route::current()->parameter('state') == 'VA') active @endif">Virginia</a></li>
                        @if(Route::currentRouteName() == 'home')
                            <li class="nav-item"><a href="#contact" class="nav-link">Contact Us</a></li>
                        @else
                            <li class="nav-item"><a href="{{ route('home') }}#contact"  class="nav-link">Contact Us</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

@yield('content')

<section class="footer">
    <div class="container copyright">
        <div class="row gx-0">
            <div class="col-md-6">
                <p class="text-start">© All Rights Reserved <strong>{{ env('APP_NAME') }}</strong></p>
            </div>
            <div class="col-md-6">
                <p class="text-end">Designed By <a href="https://eleva-sync.com/" target="_blank">Eleva Sync</a></p>
            </div>
        </div>
    </div>
</section>


<div class="go-top"><i class="fas fa-chevron-up"></i></div>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/meanmenu.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/TweenMax.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel2.thumbs.min.js') }}"></script>
<script src="{{ asset('assets/js/appear.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
@yield('scripts')
</body>
</html>
