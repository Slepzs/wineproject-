@extends('layouts.club.club')


@section('content')


    <!-- WINE LIST OVERVIEW -->
    <div class="wine-overview-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>Wine selection</h1>
                    <p>Bla bla bla... <span uk-icon="icon: happy; ratio: 0.8"></span></p>
                </div>
            </div>

            <div class="club-list-panel">

                <!-- CREATE WINE CARD -->
                <a href="{{route('wines.create')}}" class="create-card uk-card uk-card-default uk-link-toggle">
                    <div class="icon-media">
                        <span uk-icon="icon: plus-circle; ratio: 2.5"></span>
                    </div>
                    <div class="body-info">
                        <h3 class="uk-card-title">Create a wine</h3>
                        <p>(No limits)</p>
                    </div>
                </a>

                <!-- CREATE WINE CARD: NO AVAILABLE SLOTS -->
            {{--                <a href="{{route('clubs.create')}}" class="create-card create-card--disabled uk-card uk-card-default uk-link-toggle">
                                <div class="icon-media">
                                    <span uk-icon="icon: plus-circle; ratio: 2.5"></span>
                                </div>
                                <div class="body-info">
                                    <h3 class="uk-card-title">Create a Club</h3>
                                    <p>(0 slots available)</p>
                                </div>
                            </a>--}}

                <!-- WINE LIST -->
                @foreach($wines as $wine)
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
                            <div class="primary-btn primary-btn--center"><a href="{{ route('wines.show', $wine->slug) }}">View Wine</a></div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>


    {{--<!-- WINE LIST -->
    <div class="wine-list-section">
        <div class="uk-container uk-container--padding">
            <h2>All wines</h2>
            <a href="{{route('wines.create')}}">Upload Wine</a>
            <a href="{{route('ratings.choose')}}">Rate Wine</a>

            <div class="wine-panel">
                @foreach($wines as $wine)
                <div class="wine-card uk-card uk-card-default uk-card-hover">
                    <a href="">
                        <div class="wine-card-info uk-card-header">
                            <p class="uk-text-meta">{{ $wine->winecategory->name }}</p>
                            <h2 class="uk-card-title">{{ $wine->wine_name }}</h2>
                        </div>
                        <div class="wine-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: world; ratio: 0.5"></span> {{ $wine->location }}</li>
                                    <li><span uk-icon="icon: paint-bucket; ratio: 0.5"></span> {{ $wine->grape }}</li>
                                </ul>
                            </div>
                            <div class="rating">
                                <p class="rate">3.24</p>
                                <p>
                                    <span class="rated" uk-icon="icon: star; ratio: 0.5"></span>
                                    <span class="rated" uk-icon="icon: star; ratio: 0.5"></span>
                                    <span class="rated" uk-icon="icon: star; ratio: 0.5"></span>
                                    <span uk-icon="icon: star; ratio: 0.5"></span>
                                    <span uk-icon="icon: star; ratio: 0.5"></span>
                                </p>
                            </div>
                        </div>
                        <div class="wine-card-btn uk-card-footer">
                            <a href="{{ route('wines.show', $wine->slug) }}" class="uk-button">View Wine</a>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>--}}

    <!-- End of content -->
@endsection
