@extends('layouts.club.club')





@section('content')



    <a href="{{route('clubManagement.index')}}">Go Back</a>
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
    </table>

@endsection
