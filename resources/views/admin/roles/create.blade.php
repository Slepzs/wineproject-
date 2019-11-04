@extends('layouts.admin.admin')




@section('content')



    <form method="post" action="{{route('admin.roles.store')}}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name">

        <input type="submit">

    </form>







@endsection
