@extends('layouts.club.club')


@section('content')


    <!-- CLUB PROFILE OVERVIEW -->
    <div class="club-profile-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB PROFILE -->
            <div class="club-profile">

                <div class="profile-card profile-card--main uk-card uk-card-default">
                    <div class="icon-media">
                        <img src="{{$club->clubinformation->photo->file ?? '/images/wineclub-hero.jpg'}}" alt="Club image">
                    </div>
                    <div class="body-info">
                        <div class="uk-card-badge">
                            <ul class="uk-navbar-nav uk-iconnav" uk-navbar="mode: click; boundary-align: true; align: center;">
                                <li>
                                    <a href="#" class="uk-icon-button" uk-icon="icon: more-vertical"></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            @if(count($userapplied))
                                                <form action="{{route('clubs.withdraw', $club->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="club_id" value="{{$club->id}}">
                                                    <li><button type="submit"><span uk-icon="icon: minus-circle"></span>Withdraw application</button></li>
                                                </form>
                                            @else
                                                <form action="{{route('clubs.apply', $club->id)}}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" name="club_id" value="{{$club->id}}">
                                                    <li><button type="submit"><span uk-icon="icon: plus-circle"></span>Apply for membership</button></li>
                                                </form>

                                            @endif



                                            <li class="uk-nav-divider"></li>
                                            <li>
                                                <a href="{{route('clubManagement.edit', $club->id)}}"><span uk-icon="icon: pencil"></span>Edit club</a>
                                            </li>
                                            <li>
                                                <button id="delete" data-id="{{$club->id}}" onclick="myFunction()">
                                                    <span uk-icon="icon: minus-circle"></span>Delete club
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="uk-card-title">{{ $club->name }}</h3>
                        <p>Located at: {{$club->clubinformation->location }}</p>
                        <p>Type: {{ $club->clubinformation->type }}</p>
                    </div>
                </div>

                <div class="profile-card uk-card uk-card-default">
                    <div class="body-info">
                        <h4 class="uk-card-title">Biography</h4>
                        <p>{{ $club->clubinformation->bio ?: 'Write a description about your club...' }}</p>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <div>
        @foreach($wines as $winex)

           @foreach($winex->wine as $wine)

                <div class="list-card uk-card uk-card-default">
                    <div class="icon-media">
                        <img src="{{$wine->photo->file ?? '/images/wineclub-hero.jpg'}}" alt="Wine image">
                    </div>
                    <div class="body-info">
                        <div class="uk-card-badge">
                            <ul class="uk-navbar-nav uk-iconnav" uk-navbar="mode: click; boundary-align: true; align: center;">
                                <li>
                                    <a href="#" class="uk-icon-button" uk-icon="icon: more-vertical"></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            @if(Auth::user()->name === $wine->user->name)
                                                <li><a href="{{route('admin.wines.edit', $wine->id)}}"><span uk-icon="icon: plus-circle"></span>Edit wine</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="uk-card-title">{{ $wine->wine_name }}</h3>
                        <span>{{ $wine->winecategory->name }}</span>
                        <p><span uk-icon="icon: user; ratio: 0.5"></span> {{ $wine->producer }}</p>
                        <div class="body-info-columns">
                            <div class="left-body-panel">
                                <p><span uk-icon="icon: world; ratio: 0.5"></span> {{ $wine->wine_location }}</p>
                                <p><span uk-icon="icon: tag; ratio: 0.5"></span> {{ $wine->grape }}</p>
                                <p><span uk-icon="icon: clock; ratio: 0.5"></span> {{ $wine->vintage }}</p>
                            </div>
                            <div class="right-body-panel">
                                <span class="bold">3.4</span>
                                <p>{{ $wine->wine_ratings }}
                                    <span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span>
                                </p>
                                {{-- $wine->wine_ratings ?: 'Not rated yet' --}}
                            </div>
                        </div>
                        <div class="primary-btn primary-btn--center"><a href="{{ route('ratings.rate', [$wine->slug, $club->id]) }}">Rate</a></div>
                    </div>
                </div>

            @endforeach


        @endforeach
    </div>




{{--    <div class="club">

     <h1>Club Name: {{$club->name}} </h1>


            @if($club->owner_id != Auth::user()->id)
                @if(count($userapplied))
                    <form method="POST" action="{{route('clubs.withdraw', $club->id )}}">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="club_id" value="{{$club->id}}">
                        <button type="submit" class="uk-button uk-button-secondary">Withdraw</button>
                    </form>
                    @else
                    <form method="POST" action="{{route('clubs.apply', Auth::user()->id)}}">
                        @method('put')
                        @csrf
                        <input type="hidden" name="club_id" value="{{$club->id}}">
                        <button type="submit" class="uk-button uk-button-primary">Apply</button>
                    </form>

                @endif
            @endif





    </div>--}}


@endsection
