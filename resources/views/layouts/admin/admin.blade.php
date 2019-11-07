<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


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
                <li data="roles"><a href="{{route('admin.roles.index')}}">
                        <span uk-icon="icon: thumbnails"></span> Roles</a>
                    <span class="dropdown" uk-icon="icon: chevron-right"></span>

                </li>

                <ul id="roles"  class="hidden-menu">
                    <li>Tadaa</li>
                </ul>

                <a href="#"><li><span uk-icon="icon: users"></span> Users</li></a>
                <a href="#"><li>Pages</li></a>
                <a href="#"><li>Pages</li></a>
                <a href="{{route('logout')}}"><li>Logout</li></a>
            </ul>


        </div>

        <div class="nav-content-wrapper">

        <div class="top-nav">
            <div class="left-side-nav">
                <div class="profile-img">
                    <img src="/images/jackblack.jpg" alt="">
                    <p><a href="/admin/">{{ Auth::user()->name }}</a></p>
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
    crossorigin="anonymous">

</script>
<script type="text/javascript">



$(".pages li").hover(function() {
    $element = $(this).attr('data');
   console.log($element);
});

</script>
</body>

</html>
