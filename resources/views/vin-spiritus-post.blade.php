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
        </div>

        <div class="wine-panel">
            <div class="uk-container uk-container--padding">

                <div class="wine-body">
                    <div class="wine-body-info">
                        <p class="wine-meta">Rødvin</p>
                        <h1 class="wine-title">Navn på vin</h1>
                        <div class="wine-body-desc">
                            <div class="region">
                                <h4>Land / Region</h4>
                                <p>South Africa</p>
                            </div>
                            <div class="grapes">
                                <h4>Grape(s)</h4>
                                <p>Cabernet Sauvignon</p>
                            </div>
                            <div class="year">
                                <h4>Årgang</h4>
                                <p>2018</p>
                            </div>
                        </div>
                        <p class="description">Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus.</p>
                    </div>
                    <div class="wine-body-utility">
                        <div class="volume-size">
                            <ul class="uk-iconnav uk-iconnav-vertical">
                                <li><span>Volume %</span><br/> 13.5 %</li>
                                <li><span>Size cl</span><br/> 0.75 cl</li>
                            </ul>
                        </div>
                        <div class="rating">
                            <span>Rating</span>
                            <p class="rate">4.42</p>
                            <div class="rating-star">
                                <span uk-icon="icon: star; ratio: 0.5"></span>
                                <span uk-icon="icon: star; ratio: 0.5"></span>
                                <span uk-icon="icon: star; ratio: 0.5"></span>
                                <span uk-icon="icon: star; ratio: 0.5"></span>
                                <span uk-icon="icon: star; ratio: 0.5"></span>
                            </div>
                            <span>Value</span>
                            <p class="value">59.2</p>
                        </div>
                        <div class="pricetag">
                            <ul class="uk-iconnav uk-iconnav-vertical">
                                <li><span>Pris</span><br/> 33 DKK</li>
                                <li><span>Rigtig pris</span><br/> 80 DKK</li>
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
