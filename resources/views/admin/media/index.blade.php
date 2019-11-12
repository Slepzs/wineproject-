@extends('layouts.admin.admin')



@section('content')


    <div class="media-container">

    @foreach($medias as $media)

        <div id="{{$media->id}}" class="media-card">
            <div class="media-card-image">
                <img src="{{$media->file}}">
            </div>
            <div class="media-info">
                <div class="created">Created At: {{$media->created_at}}</div>
                <div class="media-delete">
                    <form>
                        <button type="submit" data-id="{{$media->id}}" class="destroy uk-button uk-button-default">Delete</button>
                    </form>
                </div>
            </div>

        </div>


    @endforeach

    </div>

@endsection
@section('scripts')

    <script>
        $(document).ready(function() {

            $(".destroy").click(function(e) {
                e.preventDefault();
                let id = $(this).data("id");
                let token = $("meta[name='csrf-token']").attr("content");
                $.ajax(
                    {
                        url: "media/"+id,
                        type: 'DELETE',
                        data: {
                            "id": id,
                            "_token": token,
                        },
                        success: function (){
                            console.log('You have deleted', id);
                            $("#"+id).remove();
                        }
                    });


            });
        });
    </script>



    @endsection
