@extends('layouts.app')



@section('content')

    <div class="create-club">
        <a style="color: black" href="{{route('clubs.create')}}">Create a club</a>
        <a href="{{route('clubManagement.index')}}">Your Clubs</a>
    </div>

    <div class="club-wrapper">
        <div class="clubs">

            @foreach($clubs as $user)

                @foreach($user->club as $club)

                <div class="club">
                    <div class="club-image">
                        <img src="{{$club->clubinformation->photo->file ?? '/images/1574340007wineclub-hero.jpg'}}" alt="">
                    </div>
                    <div class="club-info">
                        <p class="club-name"><span uk-icon="icon: check">{{$club->name}}</span>
                            </p>
                        <p class="club-location"><span uk-icon="icon: info">{{$club->clubinformation->location}}</span>
                            </p>
                        <p class="club-type"><span uk-icon="icon: info">{{$club->clubinformation->type}}</span>
                            </p>

                    </div>
                    <div class="club-apply">
                        <a href="" class="uk-button uk-button-danger">View Club</a>
                    </div>
                </div>

                @endforeach

            @endforeach

        </div>
    </div>

@endsection
