@extends('layouts.club.club')


@section('content')


    <!-- CLUB LIST OVERVIEW -->
    <div class="club-overview-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB PROFILE -->
            <div class="club-profile">

                <div class="list-card uk-card uk-card-default">
                    <div class="icon-media">
                        <img src="{{$club->clubinformation->photo->file ?? '/images/wineclub-hero.jpg'}}" alt="Club image">
                    </div>
                    <div class="body-info">
                        <h3 class="uk-card-title">{{ $club->name }}</h3>
                        <p>Located at: {{$club->clubinformation->location }}</p>
                        <p>Type: {{ $club->clubinformation->type }}</p>
                        <div class="bio">
                            {{ $club->clubinformation->bio }}
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>




{{--    <div class="club">

     <h1>Club Name: {{$club->name}} </h1>


            @if($club->owner_id != Auth::user()->id)
                @if(count($userapplied))
                    <form method="POST" action="{{route('clubs.withdraw', $club->id )}}">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="club_id" value="{{$club->id}}">
                        <button type="submit" class="uk-button uk-button-secondary">Withdraw</button>
                    </form>
                    @else
                    <form method="POST" action="{{route('clubs.apply', Auth::user()->id)}}">
                        @method('put')
                        @csrf
                        <input type="hidden" name="club_id" value="{{$club->id}}">
                        <button type="submit" class="uk-button uk-button-primary">Apply</button>
                    </form>

                @endif
            @endif





    </div>--}}


@endsection
