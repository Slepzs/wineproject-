@extends('layouts.club.club')


@section('content')


    <a href="{{ URL::previous() }}">Go back</a>
    {{$user->photo->file ?? 'No image'}}

    {{$user->name}}

    @endsection
