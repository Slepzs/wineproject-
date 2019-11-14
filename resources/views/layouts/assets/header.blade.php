
<!-- Header content -->
<div class="main-nav">

    <div class="uk-container">
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
            <nav class="uk-navbar-container" uk-navbar="mode: click">

                <!-- MOBILER BURGER MENU (LEFT) -->
                <div class="uk-navbar-left nav-overlay">
                    <a href="#offcanvas-push" class="uk-navbar-toggle mb-nav" uk-navbar-toggle-icon uk-toggle></a>

                    <div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true" class="mb-nav">
                        <div class="uk-offcanvas-bar uk-flex uk-flex-column">
                            <button class="uk-offcanvas-close" type="button" uk-close></button>

                            <a href="{{ url('/') }}" class="uk-logo">
                                {{ config('app.name', 'Laravel') }}
                            </a>

                            <ul class="uk-nav uk-nav-default uk-margin-auto-vertical">

                                <li class="uk-active"><a href="#omos">Om os</a></li>
                                <li class="uk-nav-divider"></li>
                                <li class="uk-parent uk-active">
                                    <a href="#sortiment">Sortiment</a>
                                    <ul class="uk-nav-sub">
                                        <li><a href="#">Rødvin</a></li>
                                        <li><a href="#">Hvidvin</a></li>
                                        <li><a href="#">Rosévin</a></li>
                                    </ul>
                                </li>
                                <li class="uk-nav-divider"></li>
                                <li class="uk-active"><a href="#events">Events</a></li>
                                <li class="uk-active"><a href="#kontakt">Kontakt</a></li>

                            </ul>
                        </div>
                    </div>

                    <!-- DESKTOP NAV ASSETS (LOGO FOR DESKTOP) -->
                    <a class="uk-navbar-item uk-logo dt-nav" href="#">Logo</a>

                </div>

                <!-- MOBILE LOGO -->
                <div class="uk-navbar-center nav-overlay">
                    <a href="{{ url('/') }}" class="uk-navbar-item uk-logo mb-nav">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <!-- UTILITY NAV FOR BOTH MOBILE AND DESKTOP -->
                <div class="uk-navbar-right nav-overlay utility-nav">

                    <!-- DESKTOP NAV ASSETS (DESKTOP NAVIGATION) -->
                    <ul class="uk-navbar-nav dt-nav">
                        <li><a href="#">Om os</a></li>
                        <li>
                            <a href="#">Sortiment</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Rødvin</a></li>
                                    <li><a href="#">Hvidvin</a></li>
                                    <li><a href="#">Rosévin</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Kontakt</a></li>
                    </ul>

                    <!-- UTILITY NAV -->
                    <ul class="uk-navbar-nav">
                        <!-- Authentication Links -->
                        {{--@if(Auth::check())

                            @if($user->role->name == 'administrator')
                                <li>
                                    <a href="{{route('admin')}}">Admin</a>
                                </li>
                            @endif

                        @endif--}}
                        @guest
                            <li>
                                <a class="down-icon" uk-icon="icon: triangle-down">
                                    <span class="user-register" uk-icon="icon: user"></span>
                                </a>

                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="uk-nav-header">Join us now!</li>
                                        <p>Tilmeld dig gratis & start din egen Vin Klub, mød andre vinelskere og meget mere! <span uk-icon="icon: heart; ratio: 0.5"></span></p>
                                        <li class="uk-active">
                                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="uk-active">
                                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </li>
                        @else
                            <li>
                                <a class="down-icon" uk-icon="icon: triangle-down">
                                    <img class="user-profile" src="{{-- {{Auth::user()->photo->file ?? '/images/wineclub-hero.jpg'}} --}}" alt="">
                                </a> {{-- {{ Auth::user()->name }} --}}
                                <!--<li class="uk-nav-header">Header</li>-->

                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                        </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                            </li>
                    @endguest
                    </ul>

                    <!-- SEARCH TOGGLE -->
                    <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
                </div>

                <!-- SEARCH FORM -->
                <div class="nav-overlay uk-navbar-right uk-flex-1" hidden>
                    <div class="uk-navbar-item uk-width-expand">
                        <form class="uk-search uk-search-navbar uk-width-1-1">
                            <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                        </form>
                    </div>

                    <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
                </div>
            </nav>
        </div>
    </div>

</div>
