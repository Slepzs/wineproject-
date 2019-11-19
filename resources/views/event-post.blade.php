@extends('layouts.app')


@section('content')

    <!-- EVENT POST -->
    <div class="event-post-section">
        <div class="event-post-image">
            <div class="uk-badge uk-label event-post-badge">Ny</div>
            <img src="/images/wineclub-hero.jpg" alt="Event image">
        </div>

        <div class="uk-container uk-container--padding">
            <div class="event-panel">

                <div class="event-body">
                    <div class="event-body-info">
                        <p class="uk-text-meta">Region</p>
                        <h2 class="uk-card-title">Titel på event</h2>
                        <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus. Curabitur eget vestibulum metus. Curabitur efficitur nunc metus, nec gravida dui efficitur cursus. Morbi eget tristique leo. Fusce vitae nisi nisi.</p>
                    </div>
                    <div class="event-body-utility">
                        <div class="time-place">
                            <ul class="uk-iconnav uk-iconnav-vertical">
                                <li><span uk-icon="icon: clock; ratio: 0.5"></span> 01 April, 2016</li>
                                <li><span uk-icon="icon: location; ratio: 0.5"></span> Gammel kongevej 105</li>
                            </ul>
                        </div>
                        <div class="pricetag">
                            <p class="price">199 DKK</p>
                            <p>pr. person</p>
                        </div>
                    </div>
                </div>
                <!--<div class="event-card uk-card uk-card-default uk-card-hover">
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
                            <div class="time-place">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: clock; ratio: 0.5"></span> 01 April, 2016</li>
                                    <li><span uk-icon="icon: location; ratio: 0.5"></span> Gammel kongevej 105</li>
                                </ul>
                            </div>
                            <div class="pricetag">
                                <p class="price">199 DKK</p>
                                <p>pr. person</p>
                            </div>
                        </div>
                        <div class="event-card-btn uk-card-footer">
                            <a href="#event-post" class="uk-button uk-button-text">Læs mere</a>
                        </div>
                    </a>
                </div>-->

            </div>

        </div>
    </div>

    <!-- End of content -->
@endsection
