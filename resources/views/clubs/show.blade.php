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
                    <div class="uk-navbar-container" uk-navbar>
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-toggle" uk-navbar-toggle-icon href=""></a>
                        </div>
                    </div>




                    <h2 class="uk-card-title">Club members</h2>
                    <!--<span><a href="#">(Edit club list)</a></span>-->
                    <div class="club-nav">



                        {{--<nav class="uk-navbar-container uk-margin" uk-navbar="mode: click; boundary-align: true; align: center;">
                            <ul class="uk-navbar-nav uk-iconnav">
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
                        </nav>--}}
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
                        <div class="primary-btn primary-btn--center"><a href="{{ route('ratings.rate', [$wine->slug, $club->slug]) }}">Rate</a></div>
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
