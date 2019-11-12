@extends('layouts.admin.admin')



@section('content')


    <div class="media-container">

    @foreach($medias as $media)

        <div class="media-card">
            <div class="media-card-image">
                <img src="{{$media->file}}">
            </div>
            <div class="media-info">
                <div class="created">Created At: {{$media->created_at}}</div>
                <div class="media-delete">
                    <form action="{{route('admin.media.destroy',[$media->id])}}" method="POST">
                        <button type="submit" class="uk-button uk-button-default">Delete</button>
                        @method('delete')
                        @csrf
                    </form>
                </div>
            </div>

        </div>


    @endforeach

    </div>

@endsection
