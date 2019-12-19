@extends('layouts.club.club')


@section('content')


    <!-- CLUB LIST OVERVIEW -->
    <div class="club-overview-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>Club list</h1>
                    <p>Bla bla bla... <span uk-icon="icon: happy; ratio: 0.8"></span></p>

                </div>
            </div>

            <form method="GET"  class="uk-search uk-search-large" action="{{ route('clubs.search') }}">

                <input type="text" name="search"  class="uk-search-input" placeholder="Search">
            </form>
            <hr>

            <div class="club-list-panel">

            @include('clubs.ekstra.club_amount')

                @foreach($clubs as $club)
                    <div class="list-card uk-card uk-card-default">
                        <div class="icon-media">
                            <img src="{{$club->photo->file ?? '/images/wineclub-hero.jpg'}}" alt="Club image">
                        </div>
                        <div class="body-info">
                            <h3 class="uk-card-title">{{ $club->name }}</h3>
                            <p>Located at: {{$club->clubinformation->location }}</p>
                            <p>Type: {{ $club->clubinformation->type }}</p>
                            <div class="primary-btn primary-btn--center"><a href="{{route('clubs.show', $club->slug)}}">View Club</a></div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

    {{--
            <a href="{{route('clubManagement.index')}}">Your Clubs</a>
    --}}

    <!-- End of content -->
@endsection
