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
<div class="top-nav">
    <div class="left-side-nav">
        <div class="profile-img">
            <img src="/images/jackblack.jpg" alt="">
            <p>{{ $user->name }}</p>
            <span uk-icon="menu" uk-toggle="target: #offcanvas-reveal"></span>
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


</div>

<div class="admin-content-wrapper">

    <div id="offcanvas-reveal" uk-offcanvas="mode: reveal">
        <div class="uk-offcanvas-bar sidenav">
        <div class="sidenav-header">
            <h2>Wine Club</h2>
            <button id="sidebarnav-toggle" class="uk-offcanvas-close" uk-close></button>
        </div>

        <ul class="pages">
            <a href="{{route('admin.roles.index')}}"><li>Roles</li></a>
            <a href="#"><li>Pages</li></a>
            <a href="#"><li>Pages</li></a>
            <a href="#"><li>Pages</li></a>
        </ul>


        <div class="sidebar-footer">
            <a href="{{route('logout')}}">Logout</a>
        </div>

        </div>
    </div>

    <div class="content">
        @yield('content')
    </div>
</div>


<script src="{{asset('js/libs.js')}}"></script>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">

</script>
<script type="text/javascript">



</script>
</body>

</html>
