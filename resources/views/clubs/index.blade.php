@extends('layouts.app')



@section('content')

    <div class="create-club">
        <a style="color: black" href="{{route('clubs.create')}}">Create a club</a>
    </div>

    <div class="club-wrapper">
        <div class="clubs">

            @foreach($clubs as $club)


                <div class="club">
                    <div class="club-image">
                        <img src="images/clubcover.jpg" alt="">
                    </div>
                    <div class="club-info">
                        <p class="club-name"><span uk-icon="icon: check"></span>
                            {{ $club->name }}</p>
                        <p class="club-location"><span uk-icon="icon: info"></span>
                            {{$club->clubinformation->location}}</p>
                        <p class="club-type"><span uk-icon="icon: info"></span>
                            {{ $club->clubinformation->type }}</p>

                    </div>
                    <div class="club-apply">
                        <a href="{{route('clubs.show', $club->id)}}" class="uk-button uk-button-danger">View Club</a>
                    </div>
                </div>

            @endforeach

        </div>
    </div>

@endsection
