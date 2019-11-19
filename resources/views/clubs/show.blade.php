@extends('layouts.app')



@section('content')


    <div class="club">

     <h1>Club Name: {{$club->name}} </h1>

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





    </div>


@endsection
