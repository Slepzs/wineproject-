@extends('layouts.club.club')





@section('content')



    <div class="uk-container uk-container--padding">
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


    </div>

@endsection
@section('scripts')

@endsection
