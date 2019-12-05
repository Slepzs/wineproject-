@extends('layouts.club.club')


@section('content')

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
    </div>

    <!-- End of content -->
@endsection