<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Area</title>

    <link rel="stylesheet" href="{{asset('css/libs.css')}}">

    <link rel="stylesheet" href="{{asset('css/styles.css')}}">



</head>

<body id="admin-login">


<!-- Navigation -->
<div class="admin-panel-wrapper">
    <div class="admin-content-wrapper">

        <div class="sidenav">
            <div class="sidenav-header">
                <h2>Wine Club</h2>
                <button id="sidebarnav-toggle" uk-close></button>
            </div>


            <ul class="pages" >
                <a href="{{route('clubManagement.index') }}"><li>Clubs</li></a>
                <a href="{{route('profile.index') }}"><li>User Profile</li></a>

                <a href="{{route('logout')}}"><li>Logout</li></a>
            </ul>


        </div>

        <div class="nav-content-wrapper">

        <div class="top-nav">
            <div class="left-side-nav">
                <div class="profile-img">
                    <img src="{{Auth::user()->photo->file ?? ''}}" alt="">
                    <p><a href="{{route('profile.show', auth::user()->id)}}">{{ nickname() }}</a></p>
                </div>
            </div>
            <div class="right-side-nav">
                <div class="site-links">
                    <ul>
                        <li><a href="/">LINK</a></li>
                        <li><a href="/">LINK</a></li>
                        <li><a href="/">LINK</a></li>
                    </ul>
                </div>
            </div>
        </div>







            <div class="content">
                <!-- SESSION ALERTS -->
                <div class="flash-message-container">
                    <div class="flash-message alert {{ Session::get('flash_type') }}">
                        <h3>{{ Session::get('flash_message') }}</h3>
                    </div>
                </div>

                <div class="uk-container">
                    @yield('content')
                </div>
            </div>
        </div>






    </div>

</div>



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
@yield('scripts');
</body>

</html>