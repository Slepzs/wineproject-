@extends('layouts.admin.admin')


@section('content')


    <!-- CREATE CLUB -->
    <div class="club-crud-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>Create your new club</h1>
                    <p>When you create a new club, you need to know what type of club you wan to create. Is the club for people who enjoys Red wine, White wine, Whisky or all of the above?</p>
                </div>
            </div>

            <!-- CLUB CRUD -->
            <div class="club-crud-panel">

                <form class="crud-form" method="POST" action="{{route('clubs.store')}}">
                    <h3 class="">Club information</h3>
                    @csrf
                    <input type="hidden" name="owner_id" value="{{Auth::user()->id}}">

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Club Name</label>
                        <div class="uk-inline uk-width-expand">
                            <input class="uk-input" type="text" name="name">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Location</label>
                        <div class="uk-inline uk-width-expand">
                            <input class="uk-input" type="text" name="location">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">What type?</label>
                        <select class="uk-select uk-inline uk-width-expand" name="type">
                            <option value="All">All</option>
                            <option value="Redwine">Red wine</option>
                            <option value="Whitewine">White wine</option>
                            <option value="Rose">Rosé</option>
                        </select>
                    </div>

                    <div class="uk-margin" uk-margin>
                        <button class="uk-button uk-button-default primary-btn" type="submit">Create club</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    {{--<div class="club-wrapper">

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
                    <select name="type">
                        <option value="Redwine">Red Wine</option>
                        <option value="Whitewine">White Wine</option>
                        <option value="Rose">Rosé</option>
                        <option value="All">All</option>
                    </select>
                    <input type="text" name="location">
                    <button type="submit">Create Club</button>

                </form>

            </div>

            </div>


        </div>


    </div>--}}





@endsection














