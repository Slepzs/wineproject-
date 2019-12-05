@extends('layouts.club.club')


@section('content')


    <!-- EDIT CLUB -->
    <div class="club-crud-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>Edit club information</h1>
                    <p>Edit the details about your club. Perhaps you wan to add a description to your club, so others know what kind of club you have created.</p>
                </div>
            </div>

            <!-- CLUB CRUD -->
            <div class="club-crud-panel">

                <form class="crud-form crud-form--two-columns" method="POST" action="{{route('clubManagement.update', $club->id)}}" enctype="multipart/form-data">
                    <h3 class="">Club information</h3>
                    @csrf
                    @method('patch')
                    <div class="left-form-panel">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Club Name</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input" type="text" name="name" value="{{$club->name}}">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Location</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input" type="text" name="location" value="{{$club->clubinformation->location}}">
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

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Club image</label>
                            <div class="uk-inline uk-width-expand js-upload" uk-form-custom="target: true">
                                <input type="file" name="photo_id" multiple type="button" tabindex="-1">
                                <input class="uk-input" type="text" placeholder="Select file" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="right-form-panel">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Biography</label>
                            <div class="uk-inline uk-width-expand">
                                    <textarea class="uk-textarea" rows="5" placeholder="Write something about your club..." value="{{$club->clubinformation->bio}}" name="bio"></textarea>
                            </div>
                        </div>

                        <div class="uk-margin" uk-margin>
                            <button class="uk-button uk-button-default primary-btn" type="submit">Edit club details</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>



{{--    <div class="uk-container uk-container--padding">
        <h1>Edit Club Details</h1>
        <p><a href="{{ url()->previous() }}">Back</a></p>


        <div class="myclub">
            <div class="img">
             <img src="{{$club->clubInformation->photo->file ?? ''}}">
            </div>
            <div>
                <form action="{{route('clubManagement.update', $club->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="uk-margin">
                        <input class="uk-input" type="text" name="name" placeholder="Club Name" value="{{$club->name}}">
                    </div>
                    <div class="uk-margin">
                        <input class="uk-input" type="text" name="location" placeholder="Location" value="{{$club->clubinformation->location}}">
                    </div>
                    <div class="uk-margin">
                        <select class="uk-select" name="type">
                            <option value="Red wine">Red Wine</option>
                            <option value="White wine">White Wine</option>
                            <option value="Rose">Rosé</option>
                            <option value="All">All</option>
                        </select>
                    </div>
                    <div class="uk-margin">
                        <textarea class="uk-textarea" rows="5" placeholder="Write something about your club..." name="bio">{{$club->clubinformation->bio}}</textarea>
                    </div>
                    <div class="uk-margin" uk-margin>
                        <div uk-form-custom="target: true">
                            <input type="file" name="photo_id">
                            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                        </div>
                        <button class="uk-button uk-button-default">Submit</button>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>


    </div>--}}

@endsection
@section('scripts')

@endsection
