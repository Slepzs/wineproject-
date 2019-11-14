@extends('layouts.app')



@section('content')



    <form method="post" action="{{route('club.store')}}">
        @csrf
        <input type="hidden" name="owner_id" value="{{Auth::user()->id}}">
        <input type="text" name="name">
        <button type="submit">Create Club</button>

    </form>




@endsection





@if(Auth::user())
<ul>
    <li></li>
</ul>
    @elseif

<ul>
    <li></li>
</ul>
    @endif









