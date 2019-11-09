@extends('layouts.admin.admin')




@section('content')






    <div class="admin-forms">

        <form method="POST" action="{{route('admin.users.update', $user->id ) }}"  enctype="multipart/form-data">
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Update User</legend>
                @csrf
                @method('put')
                <div class="uk-margin">
                    <input class="uk-input" type="text" value="{{$user->name}}" name="name">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="text" value="{{$user->last_name ?? ''}}" name="last_name">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="text" value="{{$user->role_id ?? ''}}" name="role_id" placeholder="Role ID: 1 Admin | 2 User | 3 Banned">
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
                    <input class="uk-input" type="text" placeholder="Password" name="password">
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
