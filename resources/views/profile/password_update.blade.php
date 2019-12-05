@extends('layouts.club.club')


@section('content')


    <!-- UPDATE USER PASSWORD -->
    <div class="club-crud-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>Change your user password</h1>
                    <p>Insecure about the strength of your password?<br/> You can easily change your password at any time you want.</p>
                </div>
            </div>

            <!-- USER CRUD -->
            <div class="club-crud-panel">
                @if($errors)

                    @foreach ($errors->all() as $message)

                        {{$message}}

                    @endforeach

                @endif
                <form class="crud-form" method="POST" action="{{route('profile.password', $user->id ) }}"  enctype="multipart/form-data">
                    <h3 class="">Update password</h3>
                    @csrf
                    @method('put')
                    <div class="uk-margin">
                        <label class="uk-form-label" for="password">Your new password</label>
                        <div class="uk-inline uk-width-expand">
                            <input class="uk-input" type="password" name="password">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="retype_password">Retype password</label>
                        <div class="uk-inline uk-width-expand">
                            <input class="uk-input" type="password" name="retype_password">
                        </div>
                    </div>

                    <div class="uk-margin" uk-margin>
                        <button class="uk-button uk-button-default primary-btn" type="submit">Update password</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


    {{--<div class="admin-forms">

        @if($errors)

            @foreach ($errors->all() as $message)

                {{$message}}

            @endforeach

        @endif
        <form method="POST" action="{{route('profile.password', $user->id ) }}"  enctype="multipart/form-data">
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Update password</legend>
                @csrf
                @method('put')
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="password" name="password" >
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Retype Password" name="retype_password" >
                </div>

                <button class="uk-button uk-button-default">Submit</button>
            </fieldset>
        </form>

    </div>--}}


@endsection
