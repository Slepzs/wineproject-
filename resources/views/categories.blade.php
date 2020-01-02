@extends('layouts.app')


@section('content')

    <!-- WINE INFO -->
    <div class="wine-info-section">
        <div class="uk-container uk-container--padding">
            <div class="info-panel">
                <h3>{{ $categoryname }}</h3>
                <h1>Selection of<br/> Wines</h1>
                <p>This is a overview over our different {{$categoryname}}s and their ratings.
                    <br/>The overview lets you get inspired to find your next wine you wan to enjoy and share with your club. Start a new rating session together with your community.</p>
            </div>
        </div>
    </div>

    <!-- WINE CATEGORY SELECTION -->
    <div class="wine-category-section">
        <div class="uk-container uk-container--padding">
            <div class="category-panel">

                <button class="uk-button uk-button-default primary-btn mb-nav" type="button" uk-icon="icon: triangle-down; ratio: 1">Vin & Spiritus</button>
                <div uk-dropdown="pos: bottom-justify; mode: click">
                    <ul class="uk-nav uk-dropdown-nav">
                        <li class="{{ Request::path() == 'vin-spiritus' ? 'uk-active' : '' }}"><a href="#"><span class="uk-margin-small-right" uk-icon="icon: heart"></span> Rødvin</a></li>
                        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: happy"></span> Hvidvin</a></li>
                        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Rosévin</a></li>
                    </ul>
                </div>

                <!-- DESKTOP CATEGORY SELECTION NAV -->
                <ul class="uk-subnav dt-nav">
                    <li class="{{ Request::path() == 'vin-spiritus' ? 'uk-active' : '' }}"><a href="#"><span class="uk-margin-small-right" uk-icon="icon: heart"></span> Red wine</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: happy"></span> White wine</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Rosé wine</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Organic wine</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Sparkling wine</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Dessert wine</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Port wine</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Champagne</a></li>
                </ul>

            </div>
        </div>
    </div>


    <!-- WINE LIST -->
    <div class="wine-list-section">
        <div class="uk-container uk-container--padding">
            <div class="wine-panel">

                @forelse($wines as $wine)
                    <div class="wine-card uk-card uk-card-default uk-card-hover">
                        <a href="{{ route('wines.show', $wine->slug) }}">
                            <div class="uk-card-media-top">
                                <img src="{{ $wine->photo->file ?? '/images/wineclub-hero.jpg' }}" alt="Event image">
                            </div>
                            <div class="wine-card-info uk-card-header">
                                <div class="uk-card-badge uk-label"><span uk-icon="icon: paint-bucket; ratio: 0.5"></span></div>
                                <p class="uk-text-meta">{{ $wine->winecategory->name }}</p>
                                <h2 class="uk-card-title"> {{ $wine->wine_name  }} </h2>
                            </div>
                            <div class="wine-card-utility uk-card-body">
                                <div class="region-grape">
                                    <ul class="uk-iconnav uk-iconnav-vertical">
                                        <li><span uk-icon="icon: world; ratio: 0.5"></span> {{ $wine->winelocations->address_address }}</li>
                                        <li><span uk-icon="icon: paint-bucket; ratio: 0.5"></span>{{ $wine->grape }}</li>
                                    </ul>
                                </div>
                                <div class="rating">
                                    <p class="rate">{{ $wine->getAverageRatingAttribute() }}</p>
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
                                <a href="{{ route('wine', $wine->slug) }}" class="uk-button">Read More</a>
                            </div>
                        </a>
                    </div>

                        @empty

                        <h1>We currently have no {{$categoryname}}</h1>

                    @endforelse


            </div>
        </div>
    </div>

    <!-- End of content -->
@endsection
