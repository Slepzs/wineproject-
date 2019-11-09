@extends('layouts.admin.admin')




@section('content')

<table class="uk-table uk-table-responsive uk-table-divider">
    <thead>
    <tr>
        <th>Name</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->updated_at}}</td>
        <td></td>
    </tr>
    @endforeach

    </tbody>
</table>


@endsection
