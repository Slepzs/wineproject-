@extends('layouts.club.club')


@section('content')


    <!-- CLUB PROFILE OVERVIEW -->
    <div class="club-profile-section">
        <div class="uk-container uk-container--padding">

            <!-- USER PROFILE -->
            <div class="club-profile">

                <div class="profile-card profile-card--main uk-card uk-card-default">
                    <div class="icon-media">
                        <img src="{{$user->photo->file ?? '/images/wineclub-hero.jpg'}}" alt="Profile image">
                    </div>
                    <div class="body-info">
                        <div class="uk-card-badge">
                            <ul class="uk-navbar-nav uk-iconnav" uk-navbar="mode: click; boundary-align: true; align: center;">
                                <li>
                                    <a href="#" class="uk-icon-button" uk-icon="icon: more-vertical"></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li>
                                                <a href="{{route('profile.index', $user->id)}}"><span uk-icon="icon: pencil"></span>Edit profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="uk-card-title">{{ $user->name }} {{ $user->last_name }}</h3>
                        <p>Nickname: #{{ $user->nickname ?: 'your-nickname' }}</p>
                        <p>{{ $user->role->name }}</p>
                    </div>
                </div>

                <div class="profile-card uk-card uk-card-default">
                    <div class="body-info">
                        <h4 class="uk-card-title">Biography</h4>
                         <p>{{ $user->bio ?: 'Write a description about yourself...' }}</p>
                    </div>
                </div>

                <div class="profile-card uk-card uk-card-default">
                    <div class="body-info">
                        <div class="uk-card-badge">
                            <ul class="uk-navbar-nav uk-iconnav" uk-navbar="mode: click; boundary-align: true; align: center;">
                                <li>
                                    <a href="#" class="uk-icon-button" uk-icon="icon: more-vertical"></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li>
                                                <a href="{{route('profile.passwordupdate', $user->id)}}"><span uk-icon="icon: pencil"></span>Change your password</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h4 class="uk-card-title">Personal information</h4>
                        <p>Email: {{$user->email }}</p>
                        <p>Password: <span uk-icon="more"></span> <span uk-icon="more"></span> <span uk-icon="more"></span></p>
                    </div>
                </div>

            </div>


        </div>
    </div>



    {{--<a href="{{ URL::previous() }}">Go back</a>
    {{$user->photo->file ?? 'No image'}}

    {{$user->name}}--}}

@endsection
