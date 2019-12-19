@extends('layouts.app')


@section('content')

    <!-- WINE POST -->
    <div class="wine-post-section">
        <div class="wine-post-image">
            <div class="uk-badge uk-label wine-post-badge"><span uk-icon="icon: paint-bucket; ratio: 0.5"></span></div>

            <!-- WINE THUMB: DESKTOP VIEW -->
            <div class="wine-thumb-section dt-hide">
                <div class="uk-container uk-container--padding">
                    <h2>Andre vine</h2>

                    <div class="wine-thumb-panel">
                        @foreach($randomwines as $wines)
                        <div class="wine-thumb">
                            <a href="{{ url('/vin-spiritus-post') }}">
                                <div class="wine-thumb-image">
                                    <img src="{{ $wines->photo->file  ?? '/images/wineclub-hero.jpg' }}" alt="Event image">
                                </div>
                                <div class="wine-thumb-body">
                                    <p class="wine-meta">{{ $wines->winecategory->name }}</p>
                                    <h3 class="wine-title"> {{$wines->wine_name}}</h3>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

        <div class="wine-panel">
            <div class="uk-container uk-container--padding">

                <div class="wine-body">
                    <div class="wine-body-info">
                        <p class="wine-meta">{{ $wine->winecategory->name }}</p>
                        <h1 class="wine-title">{{$wine->wine_name}}</h1>
                        <div class="wine-body-desc">
                            <div class="region">
                                <h4>Land / Region</h4>
                                <p>{{ $wine->winelocations->address_address }}</p>
                            </div>
                            <div class="grapes">
                                <h4>Grape(s)</h4>
                                <p>{{ $wine->grape }}</p>
                            </div>
                            <div class="year">
                                <h4>Year</h4>
                                <p>{{ $wine->vintage }}</p>
                            </div>
                        </div>
                        <p class="description">us mollis posuere lacus ac maximus.</p>
                    </div>
                    <div class="wine-body-utility">
                        <div class="volume-size">
                            <ul class="uk-iconnav uk-iconnav-vertical">
                                <li><span>Volume %</span><br/> {{ $wine->alcohol_content }} %</li>
                                <li><span>Size</span><br/> {{ $wine->bottle_size }} </li>
                            </ul>
                        </div>
                        <div class="rating">
                            <span>Rating</span>
                            <p class="rate">{{$wine->getAverageRatingAttribute()}}</p>
                            <div class="rating-star">
                                <span class="rated" uk-icon="icon: star; ratio: 0.5"></span>
                                <span class="rated" uk-icon="icon: star; ratio: 0.5"></span>
                                <span class="rated" uk-icon="icon: star; ratio: 0.5"></span>
                                <span class="rated" uk-icon="icon: star; ratio: 0.5"></span>
                                <span uk-icon="icon: star; ratio: 0.5"></span>
                            </div>
                            <span>Value</span>
                            <p class="value">59.2</p>
                        </div>
                        <div class="pricetag">
                            <ul class="uk-iconnav uk-iconnav-vertical">
                                <li><span>Pris</span><br/> {{ $wine->wine_price }}DKK</li>
                                <li><span>Rigtig pris</span><br/> {{ $wine->wine_price }} DKK</li>
                            </ul>
                        </div>
                        <!--<div class="pricetag">
                            <p class="price">199 DKK</p>
                            <p>pr. person</p>
                        </div>-->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- WINE THUMB: MOBILE VIEW -->
    <div class="wine-thumb-section mb-hide">
        <div class="uk-container uk-container--padding">
            <h2>Andre vine</h2>

            <div class="wine-thumb-panel">
                <div class="wine-thumb">
                    <a href="{{ url('/vin-spiritus-post') }}">
                        <div class="wine-thumb-image">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="wine-thumb-body">
                            <p class="wine-meta">Rødvin</p>
                            <h3 class="wine-title">Navn på vin</h3>
                        </div>
                    </a>
                </div>

                <div class="wine-thumb">
                    <a href="{{ url('/vin-spiritus-post') }}">
                        <div class="wine-thumb-image">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="wine-thumb-body">
                            <p class="wine-meta">Rødvin</p>
                            <h3 class="wine-title">Navn på vin</h3>
                        </div>
                    </a>
                </div>

                <div class="wine-thumb">
                    <a href="{{ url('/vin-spiritus-post') }}">
                        <div class="wine-thumb-image">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="wine-thumb-body">
                            <p class="wine-meta">Rødvin</p>
                            <h3 class="wine-title">Navn på vin</h3>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- End of content -->
@endsection
