@extends('layouts.app')



@section('content')



    <form method="post" action="{{route('club.store', Auth::user()->id)}}">

        <input type="text" name="name">
        button.submit

    </form>




@endsection
