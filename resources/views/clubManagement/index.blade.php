@extends('layouts.club.club')





@section('content')

    <h1>My clubs</h1>

    <table style="width:100%">


    </table>

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
