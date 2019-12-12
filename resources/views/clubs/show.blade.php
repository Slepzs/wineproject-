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
                        <h1 class="uk-card-title">{{ $club->name }}</h1>
                        <p>{{$club->clubinformation->location }}</p>
                        <p>{{ $club->clubinformation->type }}</p>
                    </div>
                </div>

                <div class="profile-card profile-card--columns">
                    <div class="profile-card uk-card uk-card-default">
                        <div class="body-info">
                            <h2 class="uk-card-title">Biography</h2>
                            <p>{{ $club->clubinformation->bio ?: 'Write a description about your club...' }}</p>
                        </div>
                    </div>

                    <div class="profile-card profile-card--highlight uk-card uk-card-default">
                        <div class="body-info">
                            <h2 class="uk-card-title">Wine rating</h2>
                            <div class="wine-rating">
                                <div class="rating-circle">
                                    <div class="rating-value">
                                        <p><span uk-icon="icon: star; ratio: 1.5"></span></p>
                                    </div>
                                    <p>Start a collective wine rating <br/>with your club members!</p>
                                    <div class="primary-btn primary-btn--center"><a href="{{ route('ratings.choose') }}">Rate wine</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CLUB MEMBERS -->
                <div class="club-profile-members">




                    <h2 class="uk-card-title">Club members</h2>
                    <span><a href="{{ route('clubManagement.users', $club->id) }}">(Edit club list)</a></span>
                    </div>


                @include('clubs.ekstra.members')
                <div class="primary-btn primary-btn--center">
                    <a href="#">View more</a>
                </div>

                <!-- CLUB WINE COLLECTION -->
                <div class="club-profile-collection">
                    <h2 class="uk-card-title">Wine collection</h2>


                    <div class="club-wine">
                        @foreach($wines as $winex)

                            @foreach($winex->wine as $wine)
                        <div class="list-card uk-card uk-card-default">
                            <div class="icon-media">
                                <img src="{{$wine->photo->file ?? '/images/wineclub-hero.jpg'}}" alt="Club wine image">
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
                                <p>Red wine{{ $wine->winecategory->name }}</p>
                                <p>{{ $wine->producer }},  {{ $wine->vintage }}</p>
                                <div class="wine-rating">
                                    <p>{{ $wine->wine_ratings }}
                                        <span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span> <span class="bold">3.4</span>
                                    </p>
                                </div>
                                <div class="primary-btn primary-btn--center"><a href="{{ route('ratings.rate', [$wine->slug, $club->id]) }}">Rate Wine</a></div>
                            </div>
                        </div>

                            @endforeach

                        @endforeach

                    </div>



                    <div class="primary-btn primary-btn--center">
                        <a href="#">View more</a>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
