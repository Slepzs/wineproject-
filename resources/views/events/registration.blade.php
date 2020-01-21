@extends('layouts.club.club')




@section('content')


    <div class="club-crud-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>Event Registrations</h1>
                </div>
            </div>


    <div class="reg-wrapper">


        <div class="single-event">
            <div class="reg">
                @foreach($events as $event)
                    <div class="reg-container ">
                        <h4>{{ $event->title  }}</h4>
                        <div class="reg-person">
                        @foreach($event->EventSignUp as $signup)
                            <div class="reg-details uk-card-default">
                                <div class="reg-details-wrapper">
                                    <h5 class="uk-card-title">Fullname</h5>
                                    <div class="details">{{ $signup->name }}</div>
                                </div>
                                <div class="reg-details-wrapper">
                                    <h5 class="uk-card-title">E-mail</h5>
                                    <div class="details">{{ $signup->email }}</div>
                                </div>

                                <div class="reg-details-wrapper">
                                    <h5 class="uk-card-title">Message</h5>
                                    <div class="details">{{ $signup->description }}</div>
                                </div>

                                <div class="reg-details-wrapper">
                                    <h5 class="uk-card-title">Guests</h5>
                                    <div class="details">{{ $signup->guests }}</div>
                                </div>
                                <div class="reg-details-wrapper">
                                    <h5 class="uk-card-title">Date</h5>
                                    <div class="details">{{ $signup->created_at }}</div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
    </div>

    </div>

        </div>


@endsection

@section('scripts')


@endsection
