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
                        <h1 class="uk-card-title">{{ $wine->wine_name }}</h1>
                        <p>{{ $wine->winecategory->name }}</p>
                        <p><span uk-icon="icon: user; ratio: 0.5"></span> {{ $wine->producer }}</p>
                    </div>
                </div>

                <div class="profile-card profile-card--columns">
                    <div class="profile-card uk-card uk-card-default">
                        <div class="body-info">
                            <h2 class="uk-card-title">Details</h2>
                            <p>Country / Region: {{ $wine->winelocations->adresse_adresse }}</p>
                            <p>Grape: {{ $wine->grape }}</p>
                            <p>Year: {{ $wine->vintage }}</p>
                            <p>Volume (%): {{ $wine->alcohol_content }}</p>
                            <p>Size (cl): {{ $wine->bottle_size }}</p>
                            <p>Price: {{ $wine->wine_price }}</p>
                        </div>
                    </div>

                    <div class="profile-card profile-card--highlight uk-card uk-card-default">
                        <div class="body-info">
                            <div class="uk-card-badge">
                                <ul class="uk-navbar-nav uk-iconnav" uk-navbar="mode: click; boundary-align: true; align: center;">
                                    <li>
                                        <a href="#" class="uk-icon-button" uk-icon="icon: more-vertical"></a>
                                        <div class="uk-navbar-dropdown">
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                @if(Auth::user()->name === $wine->user->name)
                                                    <li><a href="{{--route('admin.wines.edit', $wine->id)--}}"><span uk-icon="icon: plus-circle"></span>Edit wine rating</a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="uk-card-title">Wine rating</h2>
                            <div class="wine-rating">
                                <div class="rating-circle">
                                    <div class="rating-value">
                                        <p>3.4{{ $wine->wine_ratings }}</p>
                                    </div>
                                    <div class="rating-star">
                                        <span class="rated" uk-icon="icon: star"></span>
                                        <span class="rated" uk-icon="icon: star"></span>
                                        <span class="rated" uk-icon="icon: star"></span>
                                        <span uk-icon="icon: star"></span>
                                        <span uk-icon="icon: star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="wine-awards">
                                <h3 class="uk-card-title">Awards</h3>
                                <p>Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien.</p>
                            </div>
                        </div>
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
                                            @if(Auth::user()->name === $wine->user->name)
                                                <li><a href="{{--route('admin.wines.edit', $wine->id)--}}"><span uk-icon="icon: plus-circle"></span>Edit wine notes</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h2 class="uk-card-title">Notes</h2>
                        <p>Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. </p>
                        <p>{{-- $wine->wineadditionals->notes ?: 'Write a description about yourself...' --}}</p>

                        <h3 class="uk-card-title">Food suggestions</h3>
                        <p>Style:</p>
                        <p>Lorem Ipsum typografiindustrien.</p>
                        <p>Food pairing:</p>
                        <p>Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien.</p>
                    </div>
                </div>

            </div>

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
    <script>
        var map;
        function initMap() {
            let lat = {{ $wine->winelocations->address_latitude }};
            let lng = {{ $wine->winelocations->address_longitude }};
            console.log(lat + "xxx" + lng);
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: lat, lng: lng},
                zoom: 4
            });

            var Marker = new google.maps.Marker({
                position: {lat: lat, lng: lng},
                map: map
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap"></script>
@endsection
