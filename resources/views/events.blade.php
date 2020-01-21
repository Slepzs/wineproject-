@extends('layouts.app')


@section('content')

    <!-- EVENT INFO -->
    <div class="event-info-section">
        <div class="uk-container uk-container--padding">
            <div class="info-panel">
                <h3>Explorer our</h3>
                <h1>Upcoming Events</h1>
                <p>Take a look at our upcoming events. Each club have the opportunity to create their own events.
                    Sign up to an event and join your community. Our club membership is for free, but their can be some extra charges for each event sign up.</p>
            </div>
        </div>
    </div>

    <!-- EVENT LIST -->
    <div class="event-list-section">
        <div class="uk-container uk-container--padding">

            <div class="wine-panel" uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 200; repeat: false">


            @include('partials.event-card')



            </div>

        </div>
    </div>

    <!-- End of content -->
@endsection
