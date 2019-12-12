<!-- Header content -->
<div class="main-admin-nav">

    <div class="uk-container">


        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
            <nav class="uk-navbar-container" uk-navbar="mode: click, hover">

                <div class="uk-navbar-left nav-overlay">

                    <!-- MOBILER BURGER MENU (LEFT) -->
                    <a href="#offcanvas-push" class="uk-navbar-toggle mb-nav" uk-navbar-toggle-icon uk-toggle></a>

                    <div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true" class="mb-nav">
                        <div class="uk-offcanvas-bar uk-flex uk-flex-column">
                            <button class="uk-offcanvas-close" type="button" uk-close></button>

                            <a href="{{ url('/') }}" class="uk-logo">
                                <img class="wine-logo-lg" src="/images/wine-club-logo-white.svg" alt="Wine Club">
                            </a>

                            <ul class="uk-nav uk-nav-default uk-margin-auto-vertical">

                                <li class="uk-nav-header"><span uk-icon="grid"></span> Main panel</li>
                                <li class="uk-nav-divider"></li>
                                <li class="{{ Request::path() == 'clubs' ? 'uk-active' : '' }}"><a href="{{ url('/clubs') }}">Club list</a></li>
                                <li class="{{ Request::path() == 'wines' ? 'uk-active' : '' }}"><a href="{{ route('wines.index') }}">Wine selection</a></li>
                                <li class="uk-nav-header"><span uk-icon="user"></span> User Dashboard</li>
                                <li class="uk-nav-divider"></li>
                                <li class="{{ Request::path() == 'profile' ? 'uk-active' : '' }}"><a href="{{ route('profile.show', Auth::user()->slug) }}">Profile</a></li>
                                <li class="{{ Request::path() == 'clubManagement' ? 'uk-active' : '' }}"><a href="{{ url('/clubManagement') }}">My Clubs</a></li>

                            </ul>
                        </div>
                    </div>

                </div>

                <!-- MOBILE LOGO -->
                <div class="uk-navbar-center nav-overlay">
                    <a href="{{ url('/') }}" class="uk-navbar-item uk-logo mb-nav">
                        <img class="wine-logo-sm" src="../images/wine-club-logo-brown.svg" alt="Wine Club">
                    </a>
                    {{--<a href="{{ url('/') }}" class="uk-navbar-item uk-logo mb-nav">Logo</a>--}}
                </div>

                <!-- UTILITY NAV FOR BOTH MOBILE AND DESKTOP -->
                <div class="uk-navbar-right nav-overlay utility-nav">

                    <!-- UTILITY NAV -->
                    <ul class="uk-navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            <li>
                                <a class="down-icon" uk-icon="icon: triangle-down">
                                    <span class="user-register" uk-icon="icon: user"></span>
                                </a>

                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="uk-nav-header">Join us now!</li>
                                        <p>Tilmeld dig gratis & start din egen Vin Klub, mød andre vinelskere og meget mere! <span uk-icon="icon: heart; ratio: 0.5"></span></p>
                                        <li>
                                            <a href="{{ route('login') }}"><span class="uk-icon" uk-icon="icon: lock"></span> {{ __('Log ind') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li>
                                                <a href="{{ route('register') }}"><span class="uk-icon" uk-icon="icon: users"></span> {{ __('Tilmeld') }}</a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </li>
                        @else
                            <li>
                                <a class="down-icon" uk-icon="icon: triangle-down">
                                    <img class="user-profile" src="{{Auth::user()->photo->file ?? '/images/wineclub-hero.jpg'}}" alt="">
                                </a> {{-- {{ Auth::user()->name }} --}}
                            <!--<li class="uk-nav-header">Header</li>-->

                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <div class="user-panel">
                                            <img class="user-profile" src="{{Auth::user()->photo->file ?? '/images/wineclub-hero.jpg'}}" alt="">
                                            <div class="user-info">
                                                <p>{{ Auth::user()->name }} {{ Auth::user()->last_name }}</p>
                                                <p>#{{ Auth::user()->nickname ?: 'Nothing set' }}</p>
                                                <p>{{ Auth::user()->role->name }}</p>
                                            </div>
                                        </div>
                                        <li><a href="{{route('index')}}"><span class="uk-icon" uk-icon="icon: home"></span> Home</a></li>
                                        <li><a href="{{route('clubs.index')}}"><span class="uk-icon" uk-icon="icon: grid"></span> Main panel</a></li>
                                        <!-- Authentication Links -->
                                        @if(Auth::check())

                                            @if(Auth::user()->role->name == 'administrator')
                                                <li><a href="{{route('admin')}}"><span class="uk-icon" uk-icon="icon: cog"></span> Admin panel</a></li>
                                            @endif

                                        @endif
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                <span class="uk-icon" uk-icon="icon: lock"></span>
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
