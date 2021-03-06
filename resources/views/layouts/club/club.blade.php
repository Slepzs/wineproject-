<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wine Club - Admin Area</title>
    <script src="https://kit.fontawesome.com/54033e194b.js" crossorigin="anonymous"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/libs.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Source+Sans+Pro:700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/libs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="admin-panel-wrapper">



    <!-- Admin sidebar nav (DESKTOP ONLY) -->
    <div class="admin-sidebar-nav dt-nav">
        <a href="{{ url('/') }}" class="uk-logo">
            <img class="wine-logo-lg" src="/images/wine-club-logo-white.svg" alt="Wine Club">
        </a>

        <div uk-sticky="sel-target: .uk-nav; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
            <ul class="uk-nav uk-nav-default uk-margin-xlarge-top">

            <li class="uk-nav-header"><span uk-icon="grid"></span> Main panel</li>
            <li class="uk-nav-divider"></li>
            <li class="{{ Request::path() == 'clubs' ? 'uk-active' : '' }}"><a href="{{ url('/clubs') }}">All Clubs</a></li>
            <li class="{{ Request::path() == 'wines' ? 'uk-active' : '' }}"><a href="{{ route('wines.index') }}">Wine selection</a></li>

            <li class="uk-nav-header"><span uk-icon="user"></span> User Dashboard</li>
            <li class="uk-nav-divider"></li>
            <li class="{{ Request::path() == 'profile' ? 'uk-active' : '' }}"><a href="{{ route('profile.show', Auth::user()->slug) }}">Profile</a></li>
            <li class="{{ Request::path() == 'clubManagement' ? 'uk-active' : '' }}"><a href="{{ url('/clubManagement') }}">My Clubs</a></li>

            </ul>
        </div>
    </div>

    <!-- Main Content here + top nav -->
    <div class="main-content uk-section uk-padding-remove-vertical">
    @include('layouts.assets.admin-header')

    <!-- SESSION ALERTS -->
        <div class="flash-message-container">
            <div class="flash-message alert {{ Session::get('flash_type') }}">
                <h3>{{ Session::get('flash_message') }}</h3>
            </div>
        </div>

        @yield('content')
    </div>



    {{--<div class="admin-content-wrapper">

        <div class="sidenav">
            <div class="sidenav-header">
                <h2>Wine Club</h2>
                <button id="sidebarnav-toggle" uk-close></button>
            </div>


            <ul class="pages" >
                <li data="roles"><a href="{{route('admin.roles.index')}}">
                        <span uk-icon="icon: thumbnails"></span> Roles</a>
                    <span class="dropdown" uk-icon="icon: chevron-right"></span>

                </li>
                @if(Request::is('admin/roles'))
                    <ul>
                        <li><a href="{{route('admin.roles.create')}}">Create Roles</a></li>
                    </ul>
                @endif

                <a href="{{route('admin.users.index')}}"><li><span uk-icon="icon: users"></span> Users</li></a>
                @if(Request::is('admin/users'))
                    <ul>
                        <li><a href="{{route('admin.users.create')}}">Create Users</a></li>
                    </ul>
                @endif
                <a href="{{route('admin.media.index')}}"><li><span uk-icon="icon: image"></span> Media</li></a>
                @if(Request::is('admin/media'))
                    <ul>
                        <li><a href="{{route('admin.media.create')}}">Upload Image</a></li>
                    </ul>
                @endif
                <a href="{{route('profile.index') }}"><li>User Profile</li></a>

                <a href="{{route('logout')}}"><li>Logout</li></a>
            </ul>

        </div>

    </div>--}}
    @include('layouts.assets.footer')
</div>


<!-- Scripts -->
<script src="{{asset('js/libs.js')}}"></script>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script type="text/javascript">


    $("document").ready(function(){
        setTimeout(function(){
            $('.flash-message').addClass('disappear');
        }, 2000 ); // 5 secs
    });

</script>

@yield('scripts')

</body>
</html>
