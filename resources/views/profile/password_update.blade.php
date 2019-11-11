@extends('layouts.admin.admin')


@section('content')






    <div class="admin-forms">

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

    </div>


@endsection
