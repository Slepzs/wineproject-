@extends('layouts.admin.admin')


@section('content')






    <div class="admin-forms">

        @if($errors)

            @foreach ($errors->all() as $message)

                {{$message}}

                @endforeach

            @endif
        <p><a href="profile/password_update">Password update</a></p>

        <form method="POST" action="{{route('profile.update', $user->id ) }}"  enctype="multipart/form-data">
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Your user profile</legend>
                @csrf
                @method('put')
                <div class="uk-margin">
                    <input class="uk-input" type="text" value="{{$user->name}}" name="name">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="text" value="{{$user->last_name ?? ''}}" name="last_name">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="text" value="{{$user->nickname ?? ''}}" name="nickname" placeholder="Nickname">
                </div>

                <div class="uk-margin">
                     <input class="uk-input" type="textarea" placeholder="Write something about yourself.." value="{{$user->bio ?? ''}}" name="bio">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="email" name="email" value="{{$user->email}}">
                </div>

                <div class="uk-margin">
                    <div class="js-upload" uk-form-custom>
                        <input type="file" name="photo_id" multiple>
                        <button class="uk-button uk-button-default" type="button" tabindex="-1">Select</button>
                    </div>
                </div>

                <button class="uk-button uk-button-default">Submit</button>
            </fieldset>
        </form>

    </div>


@endsection
