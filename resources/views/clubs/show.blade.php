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
                                            <li><a href="#"><span uk-icon="icon: plus-circle"></span>Apply for membership</a></li>
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
                        <p>Located at: {{$club->clubinformation->location }}</p>
                        <p>Type: {{ $club->clubinformation->type }}</p>
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
                                    <div class="primary-btn primary-btn--center"><a href="{{-- route('clubs.show', $club->slug) --}}">Rate wine</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CLUB MEMBERS -->
                <div class="club-profile-members">
                    <h2 class="uk-card-title">Club members</h2>
                    <span><a href="#">(Edit club list)</a></span>
                    <!--<div class="club-nav">-->
                        {{--<div class="uk-card-badge">
                            <ul class="uk-navbar-nav uk-iconnav" uk-navbar="mode: click; boundary-align: true; align: center;">
                                <li>
                                    <a href="#" class="uk-icon-button" uk-icon="icon: more-vertical"></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="#"><span uk-icon="icon: plus-circle"></span>Apply for membership</a></li>
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
                        </div>--}}
                    <!--</div>-->

                    <div class="profile-card uk-card uk-card-default">
                        <div class="body-info">
                            <img class="member-image" src="/images/wineclub-hero.jpg" alt="Club member image">
                            <div class="member-name">
                                <h3 class="uk-card-title">Fullname</h3>
                                <p>Signe Frederiksen</p>
                            </div>
                            <div class="member-email">
                                <h3 class="uk-card-title">Email</h3>
                                <p>signe_frederiksen@hotmail.dk</p>
                            </div>
                            <div class="member-role">
                                <h3 class="uk-card-title">Role</h3>
                                <p>Administrator</p>
                            </div>
                        </div>
                    </div>

                    <div class="profile-card uk-card uk-card-default">
                        <div class="body-info">
                            <img class="member-image" src="/images/wineclub-hero.jpg" alt="Club member image">
                            <div class="member-name">
                                <h3 class="uk-card-title">Fullname</h3>
                                <p>Signe Frederiksen</p>
                            </div>
                            <div class="member-email">
                                <h3 class="uk-card-title">Email</h3>
                                <p>signe_frederiksen@hotmail.dk</p>
                            </div>
                            <div class="member-role">
                                <h3 class="uk-card-title">Role</h3>
                                <p>Administrator</p>
                            </div>
                        </div>
                    </div>

                    <div class="primary-btn primary-btn--center">
                        <a href="#">View more</a>
                    </div>
                </div>

                <!-- CLUB WINE COLLECTION -->
                <div class="club-profile-collection">
                    <h2 class="uk-card-title">Wine collection</h2>

                    <div class="club-wine">
                        <div class="list-card uk-card uk-card-default">
                            <div class="icon-media">
                                <img src="/images/wineclub-hero.jpg{{--$club->photo->file ?? '/images/wineclub-hero.jpg'--}}" alt="Club wine image">
                            </div>
                            <div class="body-info">
                                <h3 class="uk-card-title">Wine name</h3>
                                <p>Red wine{{-- $wine->winecategory->name --}}</p>
                                <p>SS, {{-- $wine->producer --}} 2012 {{-- $wine->vintage --}}</p>
                                <div class="wine-rating">
                                    <p>{{-- $wine->wine_ratings --}}
                                        <span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span> <span class="bold">3.4</span>
                                    </p>
                                </div>
                                <div class="primary-btn primary-btn--center"><a href="{{--route('clubs.show', $club->slug)--}}">View Wine</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="primary-btn primary-btn--center">
                        <a href="#">View more</a>
                    </div>
                </div>

            </div>

        </div>
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
