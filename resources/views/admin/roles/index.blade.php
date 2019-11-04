@extends('layouts.admin.admin')



@section('content')

<table class="uk-table uk-table-responsive uk-table-divider">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
    </thead>
    <tbody>
    @foreach($roles as $role)
    <tr>
        <td>{{$role->id}}</td>
        <td>{{$role->name}}</td>
        <td>{{$role->created_at}}</td>
        <td>{{$role->updated_at}}</td>
    </tr>
    @endforeach

    </tbody>
</table>


@endsection
