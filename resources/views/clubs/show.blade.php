@extends('layouts.club.club')


@section('content')


    <!-- CLUB LIST OVERVIEW -->
    <div class="club-overview-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>{{$club->name}} </h1>
                    <p>Bla bla bla... <span uk-icon="icon: happy; ratio: 0.8"></span></p>
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
