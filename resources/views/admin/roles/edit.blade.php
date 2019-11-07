@extends('layouts.admin.admin')




@section('content')






    <div class="admin-forms">

        <form method="POST" action="{{route('admin.roles.update', $roles->id)}}">
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Edit Role</legend>
                @csrf
                @method('put')
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="{{$roles->name}}" name="name">
                </div>

                <button class="uk-button uk-button-default">Edit</button>
            </fieldset>
        </form>

    </div>



@endsection
