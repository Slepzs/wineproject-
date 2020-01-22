@extends('layouts.club.club')


@section('content')


    <!-- EDIT CLUB MEMBER LIST -->
    <div class="club-crud-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>Edit club members</h1>
                    <p>Edit your club member list. Perhaps you wan to promote, or delete one of your members.</p>
                </div>
            </div>

            <!-- CLUB CRUD -->
            <div class="club-crud-member-panel">

                <!-- CLUB MEMBERS -->
                <div class="club-crud-members">
                    <h2 class="uk-card-title">Club members</h2>

                    @foreach($clubs as $club)
                        @foreach($club->user as $user)
                            <div class="profile-card uk-card uk-card-default">
                                <div class="body-info">
                                    <img class="member-image" src="{{$user->photo->file ?? '/images/wineclub-hero.jpg' }}" alt="Club member image">
                                    <div class="member-name">
                                        <h3 class="uk-card-title">Fullname</h3>
                                        <p><a href="{{route('profile.show', $user->id)}}">{{$user->name }}</a></p>
                                    </div>
                                    <div class="member-role">
                                        <h3 class="uk-card-title">Role</h3>
                                        @if($user->id !== $club->ownerid($club->id))
                                        <p>@include('clubManagement.exstra.rolesform')</p>
                                        @endif
                                    </div>
                                    <div class="member-actions">
                                        <h3 class="uk-card-title">Action</h3>
                                        <p>
                                        @if($user->pivot->is_active == 0)
                                            <form method="post" action="{{route('clubManagement.active', $user->pivot->id)}}">
                                                @method('patch')
                                                @csrf
                                                <button type="submit" class="crud-btn crud-btn--green"><span uk-icon="icon: plus-circle"></span> Accept?</button>
                                            </form>
                                        @else

                                                <form method="post" action="{{route('clubManagement.remove', $user->pivot->id)}}">
                                                    @method('patch')
                                                    @csrf

                                                    @if($user->id !== $club->ownerid($club->id))
                                                    <button type="submit" class="crud-btn crud-btn--red"><span uk-icon="icon: minus-circle"></span> Remove</button>
                                                    @else
                                                    <p>You can't remove yourself</p>
                                                    @endif
                                                </form>

                                            @endif
                                            </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach

                </div>

            </div>

        </div>
    </div>




    {{--<a href="{{route('clubManagement.index')}}">Go Back</a>
    <h1>Manage Club members</h1>
    <table class="uk-table">
        <caption></caption>
        <thead>
        <tr>
            <th>image</th>
            <th>Name</th>
            <th>Member</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clubs as $club)
            @foreach($club->user as $user)

                <tr>
                    <td><img width="50px" src="{{$user->photo->file ?? '' }}"></td>
                   <td><a href="{{route('profile.show', $user->id)}}">{{$user->name }}</a></td>

                    <td>
                        @if(!$club->Owner($club->id))
                        @include('clubManagement.exstra.rolesform')
                        @endif
                    </td>


                    <td>@if($user->pivot->is_active == 0)
                            <form method="post" action="{{route('clubManagement.active', $user->pivot->id)}}">
                                @method('patch')
                                @csrf
                                <button type="submit" class="uk-button uk-button-primary">Accept?</button>
                            </form>
                        @else
                            <form method="post" action="{{route('clubManagement.remove', $user->pivot->id)}}">
                                @method('patch')
                                @csrf
                                <button type="submit" class="uk-button uk-button-default">Remove</button>
                            </form>
                        @endif
                    </td>
                </tr>




            @endforeach
        @endforeach
        </tbody>
    </table>--}}

@endsection
