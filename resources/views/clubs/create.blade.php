@extends('layouts.app')



@section('content')


    <div class="club-wrapper">

        <div class="custom-container">

            <div class="create-wrapper">
            <div class="creating-club-info">
                <h2>Creating a club</h2>
                <p>
                    When creating a club. You have to figure out, what kind of club you are, do enjoy red wine, white wine, Whisky, or maybe just an allround club.
                </p>
            </div>
            <div class="create-form">
                <h2>Get started</h2>
                <form method="post" action="{{route('clubs.store')}}">
                    @csrf

                    <input type="hidden" name="owner_id" value="{{Auth::user()->id}}">
                    <input type="text" name="name" placeholder="Club Name">
                    <select name="type" id="">
                        <option value="redwine">Red Wine</option>
                        <option value="whitewine">White Wine</option>
                        <option value="Rose">Rosé</option>
                        <option value="all">All</option>
                    </select>
                    <button type="submit">Create Club</button>

                </form>

            </div>

            </div>


        </div>


    </div>





@endsection














