@extends('layouts.app')


@section('content')

    <!-- EVENT POST -->
    <div class="event-post-section">
        <div class="event-post-image">
            <div class="uk-badge uk-label event-post-badge">Ny</div>

            <!-- EVENT THUMB: DESKTOP VIEW -->
            <div class="event-thumb-section dt-hide">
                <div class="uk-container uk-container--padding">
                    <h2>Andre events</h2>

                    <div class="event-thumb-panel">
                        <div class="event-thumb">
                            <a href="{{ url('/event-post') }}">
                                <div class="event-thumb-image">
                                    <img src="/images/wineclub-hero.jpg" alt="Event image">
                                </div>
                                <div class="event-thumb-body">
                                    <p class="event-meta">Region</p>
                                    <h3 class="event-title">Titel på event</h3>
                                </div>
                            </a>
                        </div>

                        <div class="event-thumb">
                            <a href="{{ url('/event-post') }}">
                                <div class="event-thumb-image">
                                    <img src="/images/wineclub-hero.jpg" alt="Event image">
                                </div>
                                <div class="event-thumb-body">
                                    <p class="event-meta">Region</p>
                                    <h3 class="event-title">Titel på event</h3>
                                </div>
                            </a>
                        </div>

                        <div class="event-thumb">
                            <a href="{{ url('/event-post') }}">
                                <div class="event-thumb-image">
                                    <img src="/images/wineclub-hero.jpg" alt="Event image">
                                </div>
                                <div class="event-thumb-body">
                                    <p class="event-meta">Region</p>
                                    <h3 class="event-title">Titel på event</h3>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="event-panel">
            <div class="uk-container uk-container--padding">

                <div class="event-body">
                    <div class="event-body-info">
                        <p class="event-meta">Region</p>
                        <h1 class="event-title">Titel på event</h1>
                        <p>Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus. Curabitur eget vestibulum metus. Curabitur efficitur nunc metus, nec gravida dui efficitur cursus. Morbi eget tristique leo. Fusce vitae nisi nisi.</p>
                    </div>
                    <div class="event-body-utility">
                        <div class="date">
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


                <!-- EVENT FORM: JOIN EVENT -->
                <div class="event-joinevent">
                    <form class="event-form">
                        <h3 class="">Join our event</h3>
                        <div class="left-contact-panel">
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Name</label>
                                <div class="uk-inline uk-width-expand">
                                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                                    <input class="uk-input" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Email</label>
                                <div class="uk-inline uk-width-expand">
                                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                    <input class="uk-input" type="email" placeholder="">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Guests</label>
                                <div class="uk-inline uk-width-expand">
                                    <span class="uk-form-icon" uk-icon="icon: users"></span>
                                    <input class="uk-input" type="number" min="1" max="10" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="right-contact-panel">
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Message</label>
                                <div class="uk-inline uk-width-expand">
                                    <!--<span class="uk-form-icon" uk-icon="icon: comment"></span>-->
                                    <textarea class="uk-textarea" rows="5" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="uk-margin" uk-margin>
                                <button class="uk-button uk-button-default primary-btn">Join event</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- EVENT THUMB: MOBILE VIEW -->
    <div class="event-thumb-section mb-hide">
        <div class="uk-container uk-container--padding">
        <h2>Andre events</h2>

            <div class="event-thumb-panel">
                <div class="event-thumb">
                    <a href="{{ url('/event-post') }}">
                        <div class="event-thumb-image">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="event-thumb-body">
                            <p class="event-meta">Region</p>
                            <h3 class="event-title">Titel på event</h3>
                        </div>
                    </a>
                </div>

                <div class="event-thumb">
                    <a href="{{ url('/event-post') }}">
                        <div class="event-thumb-image">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="event-thumb-body">
                            <p class="event-meta">Region</p>
                            <h3 class="event-title">Titel på event</h3>
                        </div>
                    </a>
                </div>

                <div class="event-thumb">
                    <a href="{{ url('/event-post') }}">
                        <div class="event-thumb-image">
                            <img src="/images/wineclub-hero.jpg" alt="Event image">
                        </div>
                        <div class="event-thumb-body">
                            <p class="event-meta">Region</p>
                            <h3 class="event-title">Titel på event</h3>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- End of content -->
@endsection
