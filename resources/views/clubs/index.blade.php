@extends('layouts.admin.admin')


@section('content')


    <!-- CLUB LIST OVERVIEW -->
    <div class="club-overview-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>Club list</h1>
                    <p>Bla bla bla... <span uk-icon="icon: happy; ratio: 0.8"></span></p>
                </div>
            </div>

            <div class="club-list-panel">

                <!-- CREATE CLUB CARD -->
                <a href="{{route('clubs.create')}}" class="create-card uk-card uk-card-default uk-link-toggle">
                    <div class="icon-media">
                        <span uk-icon="icon: plus-circle; ratio: 2.5"></span>
                    </div>
                    <div class="body-info">
                        <h3 class="uk-card-title">Create a Club</h3>
                        <p>(3 slots available)</p>
                    </div>
                </a>

                <!-- CREATE CLUB CARD: NO AVAILABLE SLOTS -->
{{--                <a href="{{route('clubs.create')}}" class="create-card create-card--disabled uk-card uk-card-default uk-link-toggle">
                    <div class="icon-media">
                        <span uk-icon="icon: plus-circle; ratio: 2.5"></span>
                    </div>
                    <div class="body-info">
                        <h3 class="uk-card-title">Create a Club</h3>
                        <p>(0 slots available)</p>
                    </div>
                </a>--}}

                <!-- CLUB LIST -->
                @foreach($clubs as $club)
                    <div class="list-card uk-card uk-card-default">
                        <div class="icon-media">
                            <img src="../images/wineclub-hero.jpg" alt="Club image">
                        </div>
                        <div class="body-info">
                            <div class="uk-card-badge">
                                <ul class="uk-navbar-nav uk-iconnav" uk-navbar="mode: click; boundary-align: true; align: center;">
                                    <li>
                                        <a href="#" uk-icon="icon: more-vertical"></a>
                                        <div class="uk-navbar-dropdown">
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a href="#"><span uk-icon="icon: plus-circle"></span>Apply for membership</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="uk-card-title">{{ $club->name }}</h3>
                            <p>Located at: {{$club->clubinformation->location }}</p>
                            <p>Type: {{ $club->clubinformation->type }}</p>
                            <div class="primary-btn"><a href="{{route('clubs.show', $club->id)}}">View Club</a></div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

    {{--
            <a href="{{route('clubManagement.index')}}">Your Clubs</a>
    --}}

    <!-- End of content -->
@endsection
