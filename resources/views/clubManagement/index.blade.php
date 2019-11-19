@extends('layouts.club.club')





@section('content')

    <h1>My clubs</h1>
    <p>This is an overview, all the clubs that you have created.</br> Accept people, who want to join your wine club or edit club details<br />It's up to you.</p>
    <div class="create-club">
       No Club? -> <a style="color: black" href="{{route('clubs.create')}}">Create a club</a>
    </div>

    <table class="uk-table">
        <caption></caption>
        <thead>
        <tr>
            <th>Name</th>
            <th>Users</th>
            <th>Delete club</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clubs as $club)
            <tr id="{{$club->id}}">
                <td><a href="{{route('clubManagement.edit', $club->id)}}">{{$club->name}}</a></td>
                <td><a href="{{route('clubManagement.users', $club->id)}}">{{ count($club->user) }}</a></td>
                <td><button id="delete" data-id="{{$club->id}}" onclick="myFunction()">Delete club</button></td>
            </tr>

        @endforeach
        </tbody>
    </table>

    @endsection
    @section('scripts')

        <script>
                function myFunction() {
                    let id = $("#delete").attr('data-id');
                    let deleteclub = prompt("Please type delete");
                    if (deleteclub == 'delete') {
                        $.ajax({
                            url: "clubManagement/deleteclub/"+id,
                            type: 'DELETE',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "id": id,
                            },
                            success: function (data) {
                                $("#"+id).remove();
                            }
                        });
                    }
                }
        </script>

    @endsection
