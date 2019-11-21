@extends('layouts.app')


@section('content')

    <!-- WINE INFO -->
    <div class="wine-info-section">
        <div class="uk-container uk-container--padding">
            <div class="info-panel">
                <h3>Udforsk klubbens</h3>
                <h1>Samling af<br/> Vin & Spiritus</h1>
                <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus.</p>
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
                    <li class="{{ Request::path() == 'vin-spiritus' ? 'uk-active' : '' }}"><a href="#"><span class="uk-margin-small-right" uk-icon="icon: heart"></span> Rødvin</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: happy"></span> Hvidvin</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Rosévin</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Økologisk vin</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Mousserende vin</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Dessertvin</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Portvin</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Champagne</a></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Spiritus</a></li>
                </ul>

            </div>
        </div>
    </div>


    <!-- WINE LIST -->
    <div class="wine-list-section">
        <div class="uk-container uk-container--padding">
            <div class="wine-panel">

                <div class="wine-card uk-card uk-card-default uk-card-hover">
                    <a href="{{ url('/vin-spiritus-post') }}">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="wine-card-info uk-card-header">
                            <div class="uk-card-badge uk-label"><span uk-icon="icon: paint-bucket; ratio: 0.5"></span></div>
                            <p class="uk-text-meta">Rødvin</p>
                            <h2 class="uk-card-title">Navn på vin</h2>
                        </div>
                        <div class="wine-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: world; ratio: 0.5"></span> Spanien</li>
                                    <li><span uk-icon="icon: paint-bucket; ratio: 0.5"></span> 50% garnacha & 50% cariñana</li>
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
                            <a href="{{ url('/vin-spiritus-post') }}" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

                <div class="wine-card uk-card uk-card-default uk-card-hover">
                    <a href="#wine-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="wine-card-info uk-card-header">
                            <div class="uk-card-badge uk-label"><span uk-icon="icon: paint-bucket; ratio: 0.5"></span></div>
                            <p class="uk-text-meta">Rødvin</p>
                            <h2 class="uk-card-title">Navn på vin</h2>
                        </div>
                        <div class="wine-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: world; ratio: 0.5"></span> Spanien</li>
                                    <li><span uk-icon="icon: paint-bucket; ratio: 0.5"></span> 50% garnacha & 50% cariñana</li>
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
                            <a href="#wine-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

                <div class="wine-card uk-card uk-card-default uk-card-hover">
                    <a href="#wine-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="wine-card-info uk-card-header">
                            <div class="uk-card-badge uk-label"><span uk-icon="icon: paint-bucket; ratio: 0.5"></span></div>
                            <p class="uk-text-meta">Rødvin</p>
                            <h2 class="uk-card-title">Navn på vin</h2>
                        </div>
                        <div class="wine-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: world; ratio: 0.5"></span> Spanien</li>
                                    <li><span uk-icon="icon: paint-bucket; ratio: 0.5"></span> 50% garnacha & 50% cariñana</li>
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
                            <a href="#wine-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

                <div class="wine-card uk-card uk-card-default uk-card-hover">
                    <a href="#wine-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="wine-card-info uk-card-header">
                            <div class="uk-card-badge uk-label"><span uk-icon="icon: paint-bucket; ratio: 0.5"></span></div>
                            <p class="uk-text-meta">Rødvin</p>
                            <h2 class="uk-card-title">Navn på vin</h2>
                        </div>
                        <div class="wine-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: world; ratio: 0.5"></span> Spanien</li>
                                    <li><span uk-icon="icon: paint-bucket; ratio: 0.5"></span> 50% garnacha & 50% cariñana</li>
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
                            <a href="#wine-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

                <div class="wine-card uk-card uk-card-default uk-card-hover">
                    <a href="#wine-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="wine-card-info uk-card-header">
                            <div class="uk-card-badge uk-label"><span uk-icon="icon: paint-bucket; ratio: 0.5"></span></div>
                            <p class="uk-text-meta">Rødvin</p>
                            <h2 class="uk-card-title">Navn på vin</h2>
                        </div>
                        <div class="wine-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: world; ratio: 0.5"></span> Spanien</li>
                                    <li><span uk-icon="icon: paint-bucket; ratio: 0.5"></span> 50% garnacha & 50% cariñana</li>
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
                            <a href="#wine-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

                <div class="wine-card uk-card uk-card-default uk-card-hover">
                    <a href="#wine-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="wine-card-info uk-card-header">
                            <div class="uk-card-badge uk-label"><span uk-icon="icon: paint-bucket; ratio: 0.5"></span></div>
                            <p class="uk-text-meta">Rødvin</p>
                            <h2 class="uk-card-title">Navn på vin</h2>
                        </div>
                        <div class="wine-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: world; ratio: 0.5"></span> Spanien</li>
                                    <li><span uk-icon="icon: paint-bucket; ratio: 0.5"></span> 50% garnacha & 50% cariñana</li>
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
                            <a href="#wine-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

            </div>

            <div class="wine-panel" uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 200; repeat: false">

                <div class="wine-card uk-card uk-card-default uk-card-hover">
                    <a href="#wine-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="wine-card-info uk-card-header">
                            <div class="uk-card-badge uk-label"><span uk-icon="icon: paint-bucket; ratio: 0.5"></span></div>
                            <p class="uk-text-meta">Rødvin</p>
                            <h2 class="uk-card-title">Navn på vin</h2>
                        </div>
                        <div class="wine-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: world; ratio: 0.5"></span> Spanien</li>
                                    <li><span uk-icon="icon: paint-bucket; ratio: 0.5"></span> 50% garnacha & 50% cariñana</li>
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
                            <a href="#wine-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

                <div class="wine-card uk-card uk-card-default uk-card-hover">
                    <a href="#wine-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="wine-card-info uk-card-header">
                            <div class="uk-card-badge uk-label"><span uk-icon="icon: paint-bucket; ratio: 0.5"></span></div>
                            <p class="uk-text-meta">Rødvin</p>
                            <h2 class="uk-card-title">Navn på vin</h2>
                        </div>
                        <div class="wine-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: world; ratio: 0.5"></span> Spanien</li>
                                    <li><span uk-icon="icon: paint-bucket; ratio: 0.5"></span> 50% garnacha & 50% cariñana</li>
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
                            <a href="#wine-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

                <div class="wine-card uk-card uk-card-default uk-card-hover">
                    <a href="#wine-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="wine-card-info uk-card-header">
                            <div class="uk-card-badge uk-label"><span uk-icon="icon: paint-bucket; ratio: 0.5"></span></div>
                            <p class="uk-text-meta">Rødvin</p>
                            <h2 class="uk-card-title">Navn på vin</h2>
                        </div>
                        <div class="wine-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: world; ratio: 0.5"></span> Spanien</li>
                                    <li><span uk-icon="icon: paint-bucket; ratio: 0.5"></span> 50% garnacha & 50% cariñana</li>
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
                            <a href="#wine-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- End of content -->
@endsection
