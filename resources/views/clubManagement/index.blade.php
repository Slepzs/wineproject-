@extends('layouts.club.club')


@section('content')


    <!-- CLUB LIST OVERVIEW -->
    <div class="club-overview-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>My Membership(s)</h1>
                    <p>This is an overview of all the clubs that you have created. Accept people, who want to join Your wine club or edit club details
                        - It's all up to you! <span uk-icon="icon: happy; ratio: 0.8"></span></p>
                </div>
            </div>

            <div class="club-list-panel">

                <!-- CREATE CLUB CARD -->
                <a href="{{route('clubs.create')}}" class="create-card uk-card uk-card-default uk-link-toggle">
                    <div class="icon-media">
                        <span uk-icon="icon: plus-circle; ratio: 2.5"></span>
                    </div>
                    <div class="body-info">
                        <h3 class="uk-card-title">Create a Club</h3>
                        <p>(3 slots available)</p>
                    </div>
                </a>

                <!-- CREATE CLUB CARD: NO AVAILABLE SLOTS -->
            {{--                <a href="{{route('clubs.create')}}" class="create-card create-card--disabled uk-card uk-card-default uk-link-toggle">
                                <div class="icon-media">
                                    <span uk-icon="icon: plus-circle; ratio: 2.5"></span>
                                </div>
                                <div class="body-info">
                                    <h3 class="uk-card-title">Create a Club</h3>
                                    <p>(0 slots available)</p>
                                </div>
                            </a>--}}

                <!-- CLUB LIST -->
                @foreach($clubs as $club)
                    <div id="{{$club->id}}" class="list-card uk-card uk-card-default">
                        <div class="icon-media">
                            <img src="../images/wineclub-hero.jpg" alt="Club image">
                        </div>
                        <div class="body-info">
                            <div class="uk-card-badge">
                                <ul class="uk-navbar-nav uk-iconnav" uk-navbar="mode: click; boundary-align: true; align: center;">
                                    <li>
                                        <a href="#" class="uk-icon-button" uk-icon="icon: more-vertical"></a>
                                        <div class="uk-navbar-dropdown">
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li>
                                                    <a href="{{route('clubManagement.edit', $club->id)}}"><span uk-icon="icon: pencil"></span>Edit club</a>
                                                </li>
                                                <li>
                                                    <button id="delete" data-id="{{$club->id}}" onclick="myFunction()">
                                                        <span uk-icon="icon: minus-circle"></span>Delete club
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="uk-card-title">{{ $club->name }}</h3>
                            <p>{{$club->clubinformation->location }}</p>
                            <p>{{ $club->clubinformation->type }}</p>
                            <div class="primary-btn primary-btn--center"><a href="{{route('clubs.show', $club->slug)}}">View Club</a></div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

{{--<h1>My clubs</h1>
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
</table>--}}

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
