
<!-- Header content -->
<div class="main-nav">
    <div class="uk-container">
        <nav class="uk-navbar-container" uk-navbar="mode: click">

            <div class="uk-navbar-left">
                <a href="#offcanvas-push" class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle></a>

                <div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true">
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
            </div>

            <div class="uk-navbar-center">
                <a href="{{ url('/') }}" class="uk-navbar-item uk-logo">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="uk-navbar-right">
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
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a uk-icon="icon: triangle-down">
                                <img class="user-profile" src="/images/wineclub-hero.jpg{{-- {{Auth::user()->photo->file ?? ''}} --}}" alt="">
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
            </div>

        </nav>
    </div>
</div>
