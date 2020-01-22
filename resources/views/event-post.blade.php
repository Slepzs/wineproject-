@extends('layouts.app')


@section('content')

    <!-- EVENT POST -->
    <div class="event-post-section">
        <div class="event-post-image" style="background-image: url({{ $event->photo->file ?? '/images/wineclub-hero.jpg' }})">
            <div class="uk-badge uk-label event-post-badge">Ny</div>
            <div class="uk-badge uk-label event-post-badge">
                @if($event->public == '0')
                    Public Event
                @else
                    Private Event
                @endif
            </div>

            <!-- EVENT THUMB: DESKTOP VIEW -->
            @foreach($randomevents as $randEvent)


            <div class="event-thumb-section dt-hide">
                <div class="uk-container uk-container--padding">
                    <h2>Andre events</h2>

                    <div class="event-thumb-panel">
                        <div class="event-thumb">
                            <a href="{{ url('/event-post', $event->slug) }}">
                                <div class="event-thumb-image">
                                    <img src="{{ $randEvent->photo->file ?? '/images/wineclub-hero.jpg' }}" alt="Event image">
                                </div>
                                <div class="event-thumb-body">
                                    <p class="event-meta">{{ $randEvent->location }}</p>
                                    <h3 class="event-title"> {{ $randEvent->title }}</h3>
                                </div>
                            </a>
                        </div>
                        @endforeach


                    </div>

                </div>
            </div>
        </div>

        <div class="event-panel">
            <div class="uk-container uk-container--padding">

                <div class="event-body">
                    <div class="event-body-info">
                        <p class="event-meta">{{ $event->location }}</p>
                        <h1 class="event-title">{{ $event->title }}</h1>
                        <p>{{ $event->description }}</p>
                    </div>
                    <div class="event-body-utility">
                        <div class="date">
                            <ul class="uk-iconnav uk-iconnav-vertical">
                                <li><span uk-icon="icon: clock; ratio: 0.5"></span> {{$event->date}}</li>
                                <li><span uk-icon="icon: location; ratio: 0.5"></span> {{ $event->location }}</li>
                            </ul>
                        </div>
                        <div class="pricetag">
                            <p class="price">{{$event->price}} DKK</p>
                            <p>pr. person</p>
                        </div>
                    </div>
                </div>


                <!-- EVENT FORM: JOIN EVENT -->
                @include('partials.event-signup-form')

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
