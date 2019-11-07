@extends('layouts.admin.admin')




@section('content')

<table class="uk-table uk-table-responsive uk-table-divider">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($roles as $role)
    <tr>
        <td>{{$role->id}}</td>
        <td><a href="{{route('admin.roles.edit', $role->id)}}">{{$role->name}}</a></td>
        <td>{{$role->created_at}}</td>
        <td>{{$role->updated_at}}</td>
        <td><form action="{{route('admin.roles.destroy',[$role->id])}}" method="POST">
                <button type="submit" class="uk-button uk-button-default">Delete</button>
                @method('delete')
                @csrf
            </form></td>

    </tr>
    @endforeach

    </tbody>
</table>


@endsection
