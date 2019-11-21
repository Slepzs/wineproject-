@extends('layouts.app')


@section('content')

    <!-- EVENT INFO -->
    <div class="event-info-section">
        <div class="uk-container uk-container--padding">
            <div class="info-panel">
                <h3>Udforsk vores</h3>
                <h1>Kommende events</h1>
                <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus.</p>
            </div>
        </div>
    </div>

    <!-- EVENT LIST -->
    <div class="event-list-section">
        <div class="uk-container uk-container--padding">

            <div class="wine-panel">

                <div class="event-card uk-card uk-card-default uk-card-hover">
                    <a href="{{ url('/event-post') }}">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="event-card-info uk-card-header">
                            <div class="uk-card-badge uk-label">Ny</div>
                            <p class="uk-text-meta">Region</p>
                            <h2 class="uk-card-title">Titel på event</h2>
                        </div>
                        <div class="event-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: clock; ratio: 0.5"></span> 01 April, 2016</li>
                                    <li><span uk-icon="icon: location; ratio: 0.5"></span> Gammel kongevej 105</li>
                                </ul>
                            </div>
                            <div class="rating">
                                <p class="rate">199 DKK</p>
                                <p>pr. person</p>
                            </div>
                        </div>
                        <div class="event-card-btn uk-card-footer">
                            <a href="{{ url('/event-post') }}" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

                <div class="event-card uk-card uk-card-default uk-card-hover">
                    <a href="#event-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="event-card-info uk-card-header">
                            <div class="uk-card-badge uk-label">Ny</div>
                            <p class="uk-text-meta">Region</p>
                            <h2 class="uk-card-title">Titel på event</h2>
                        </div>
                        <div class="event-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: clock; ratio: 0.5"></span> 01 April, 2016</li>
                                    <li><span uk-icon="icon: location; ratio: 0.5"></span> Gammel kongevej 105</li>
                                </ul>
                            </div>
                            <div class="rating">
                                <p class="rate">199 DKK</p>
                                <p>pr. person</p>
                            </div>
                        </div>
                        <div class="event-card-btn uk-card-footer">
                            <a href="#event-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

                <div class="event-card uk-card uk-card-default uk-card-hover">
                    <a href="#event-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="event-card-info uk-card-header">
                            <div class="uk-card-badge uk-label">Ny</div>
                            <p class="uk-text-meta">Region</p>
                            <h2 class="uk-card-title">Titel på event</h2>
                        </div>
                        <div class="event-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: clock; ratio: 0.5"></span> 01 April, 2016</li>
                                    <li><span uk-icon="icon: location; ratio: 0.5"></span> Gammel kongevej 105</li>
                                </ul>
                            </div>
                            <div class="rating">
                                <p class="rate">199 DKK</p>
                                <p>pr. person</p>
                            </div>
                        </div>
                        <div class="event-card-btn uk-card-footer">
                            <a href="#event-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

                <div class="event-card uk-card uk-card-default uk-card-hover">
                    <a href="#event-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="event-card-info uk-card-header">
                            <div class="uk-card-badge uk-label">Ny</div>
                            <p class="uk-text-meta">Region</p>
                            <h2 class="uk-card-title">Titel på event</h2>
                        </div>
                        <div class="event-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: clock; ratio: 0.5"></span> 01 April, 2016</li>
                                    <li><span uk-icon="icon: location; ratio: 0.5"></span> Gammel kongevej 105</li>
                                </ul>
                            </div>
                            <div class="rating">
                                <p class="rate">199 DKK</p>
                                <p>pr. person</p>
                            </div>
                        </div>
                        <div class="event-card-btn uk-card-footer">
                            <a href="#event-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

                <div class="event-card uk-card uk-card-default uk-card-hover">
                    <a href="#event-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="event-card-info uk-card-header">
                            <div class="uk-card-badge uk-label">Ny</div>
                            <p class="uk-text-meta">Region</p>
                            <h2 class="uk-card-title">Titel på event</h2>
                        </div>
                        <div class="event-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: clock; ratio: 0.5"></span> 01 April, 2016</li>
                                    <li><span uk-icon="icon: location; ratio: 0.5"></span> Gammel kongevej 105</li>
                                </ul>
                            </div>
                            <div class="rating">
                                <p class="rate">199 DKK</p>
                                <p>pr. person</p>
                            </div>
                        </div>
                        <div class="event-card-btn uk-card-footer">
                            <a href="#event-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

                <div class="event-card uk-card uk-card-default uk-card-hover">
                    <a href="#event-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="event-card-info uk-card-header">
                            <div class="uk-card-badge uk-label">Ny</div>
                            <p class="uk-text-meta">Region</p>
                            <h2 class="uk-card-title">Titel på event</h2>
                        </div>
                        <div class="event-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: clock; ratio: 0.5"></span> 01 April, 2016</li>
                                    <li><span uk-icon="icon: location; ratio: 0.5"></span> Gammel kongevej 105</li>
                                </ul>
                            </div>
                            <div class="rating">
                                <p class="rate">199 DKK</p>
                                <p>pr. person</p>
                            </div>
                        </div>
                        <div class="event-card-btn uk-card-footer">
                            <a href="#event-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

            </div>


            <div class="wine-panel" uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 200; repeat: false">

                <div class="event-card uk-card uk-card-default uk-card-hover">
                    <a href="#event-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="event-card-info uk-card-header">
                            <div class="uk-card-badge uk-label">Ny</div>
                            <p class="uk-text-meta">Region</p>
                            <h2 class="uk-card-title">Titel på event</h2>
                        </div>
                        <div class="event-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: clock; ratio: 0.5"></span> 01 April, 2016</li>
                                    <li><span uk-icon="icon: location; ratio: 0.5"></span> Gammel kongevej 105</li>
                                </ul>
                            </div>
                            <div class="rating">
                                <p class="rate">199 DKK</p>
                                <p>pr. person</p>
                            </div>
                        </div>
                        <div class="event-card-btn uk-card-footer">
                            <a href="#event-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

                <div class="event-card uk-card uk-card-default uk-card-hover">
                    <a href="#event-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="event-card-info uk-card-header">
                            <div class="uk-card-badge uk-label">Ny</div>
                            <p class="uk-text-meta">Region</p>
                            <h2 class="uk-card-title">Titel på event</h2>
                        </div>
                        <div class="event-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: clock; ratio: 0.5"></span> 01 April, 2016></li>
                                    <li><span uk-icon="icon: location; ratio: 0.5"></span> Gammel kongevej 105</li>
                                </ul>
                            </div>
                            <div class="rating">
                                <p class="rate">199 DKK</p>
                                <p>pr. person</p>
                            </div>
                        </div>
                        <div class="event-card-btn uk-card-footer">
                            <a href="#event-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

                <div class="event-card uk-card uk-card-default uk-card-hover">
                    <a href="#event-post">
                        <div class="uk-card-media-top">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="event-card-info uk-card-header">
                            <div class="uk-card-badge uk-label">Ny</div>
                            <p class="uk-text-meta">Region</p>
                            <h2 class="uk-card-title">Titel på event</h2>
                        </div>
                        <div class="event-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: clock; ratio: 0.5"></span> 01 April, 2016</li>
                                    <li><span uk-icon="icon: location; ratio: 0.5"></span> Gammel kongevej 105</li>
                                </ul>
                            </div>
                            <div class="rating">
                                <p class="rate">199 DKK</p>
                                <p>pr. person</p>
                            </div>
                        </div>
                        <div class="event-card-btn uk-card-footer">
                            <a href="#event-post" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>

    <!-- End of content -->
@endsection
