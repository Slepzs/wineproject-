@extends('layouts.club.club')


@section('content')


    <!-- WINE PROFILE OVERVIEW -->
    <div class="club-profile-section">
        <div class="uk-container uk-container--padding">

            <!-- WINE PROFILE -->
            <div class="club-profile">

                <div class="profile-card profile-card--main uk-card uk-card-default">
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
                        <p>{{ $wine->winecategory->name }}</p>
                        <p><span uk-icon="icon: user; ratio: 0.5"></span> {{ $wine->producer }}</p>
                        <button class="primary-btn" onclick="club()" href="#modal-example" uk-toggle>
                            Pick Club
                        </button>
                    </div>
                </div>

                <div class="profile-card uk-card uk-card-default">
                    <div class="body-info">
                        <h4 class="uk-card-title">Description</h4>
                        <p>Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. </p>
                        <p>{{-- $wine->bio ?: 'Write a description about yourself...' --}}</p>
                    </div>
                </div>

                <div class="profile-card uk-card uk-card-default">
                    <div class="body-info body-info--expand">
                        <h4 class="uk-card-title">Details</h4>
                        <div class="body-info-columns">
                            <div class="left-body-panel">
                                <p>Country / Region: {{ $wine->wine_location }}</p>
                                <p>Grape: {{ $wine->grape }}</p>
                                <p>Year: {{ $wine->vintage }}</p>
                                <p>Volume (%): {{ $wine->alcohol_content }}</p>
                                <p>Size (cl): {{ $wine->bottle_size }}</p>
                            </div>
                            <div class="right-body-panel">
                                <p>Rating</p>
                                <span class="bold">3.4</span>
                                <p>{{ $wine->wine_ratings }}
                                    <span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span>
                                </p>
                                <p>Value</p>
                                <p>59.2{{-- $wine->grape --}}</p>
                            </div>
                        </div>
                        <div class="body-info-columns">
                            <div class="left-body-panel">
                                <p>Price</p>
                                <p>{{ $wine->wine_price }}</p>
                            </div>
                            <div class="right-body-panel">
                                <p>Real price</p>
                                <p>{{ $wine->wine_price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>



    <div id="modal-example" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title">Pick Club</h2>

            <div id="clubs">
                @if(count($clubs) > 0)
                    @foreach($clubs as $club)

                        <div class="choosewine">
                            <img class="" src="{{$club->clubinformation->photo->file ?? '/images/wineclub-hero.jpg'}}" alt="">
                            <form action="{{route('ratings.confirmclub')}}" method="post">
                                @csrf
                                @method('post')
                                <input type="hidden" name="club_id" value="{{$club->id}}">
                                <input type="hidden" name="wine_id" value="{{$wine->id}}">
                                <button class="primary-btn-choose" type="submit">{{$club->name}}</button>
                            </form>
                        </div>

                        @endforeach

                    @endif
            </div>


            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            </p>
        </div>
    </div>

    {{--<style>
        #map {
            height: 100%;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>

    <!-- WINE LIST -->
    <div class="wine-list-section">
        <div class="uk-container--padding">
            <div class="wine-panel">
                    <div class="wine-card uk-card uk-card-default uk-card-hover">
                        <a href="{{ url('/vin-spiritus-post') }}">
                            <div class="uk-card-media-top">
                                <img src="{{ $wine->photo->file ?? '/images/wineclub-hero.jpg' }}" alt="Event image">
                            </div>
                            <div class="wine-card-info uk-card-header">
                                <div class="uk-card-badge uk-label"><span uk-icon="icon: paint-bucket; ratio: 0.5"></span></div>
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
                        </a>
                    </div>

                <div id="map"></div>

            </div>
        </div>
    </div>--}}

    <!-- End of content -->
@endsection

@section('scripts')

@endsection
