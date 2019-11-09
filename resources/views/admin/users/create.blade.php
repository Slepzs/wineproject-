@extends('layouts.admin.admin')




@section('content')






<div class="admin-forms">

    <form method="post" action="{{route('admin.roles.store')}}">
        <fieldset class="uk-fieldset">

            <legend class="uk-legend">Create a Role</legend>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="Input" name="name">
            </div>

            <button class="uk-button uk-button-default">Submit</button>
        </fieldset>
    </form>

</div>



@endsection
