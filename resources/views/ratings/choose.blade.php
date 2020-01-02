@extends('layouts.club.club')


@section('content')




    <!-- WINE LIST -->
    <div class="wine-list-section">


        <a href="{{route('wines.create')}}">Upload Wine</a>
        <div class="uk-container uk-container--padding">
            <form method="GET"  class="uk-search uk-search-large" action="{{ route('ratings.search') }}">

                        <input type="text" name="search"  class="uk-search-input" placeholder="Search">
            </form>
            <hr>
            <div class="wine-panel">

                @foreach($wines as $wine)
                    <div class="list-card uk-card uk-card-default">
                        <div class="icon-media">
                            <img src="{{$wine->photo->file ?? '/images/wineclub-hero.jpg'}}" alt="Wine image">
                        </div>
                        <div class="body-info">
                            <div class="uk-card-badge">
                                <ul class="uk-navbar-nav uk-iconnav" uk-navbar="mode: click; boundary-align: true; align: center;">
                                    <li>
                                        <a href="#" class="uk-icon-button" uk-icon="icon: more-vertical"></a>
                                        <div class="uk-navbar-dropdown">
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                @if(Auth::user()->id === $wine->user_id)
                                                    <li><a href="{{route('wines.edit', $wine->id)}}"><span uk-icon="icon: plus-circle"></span>Edit wine</a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="uk-card-title">{{ $wine->wine_name }}</h3>
                            <span>{{ $wine->winecategory->name }}</span>
                            <p><span uk-icon="icon: user; ratio: 0.5"></span> {{ $wine->producer }}</p>
                            <div class="body-info-columns">
                                <div class="left-body-panel">
                                    <p><span uk-icon="icon: world; ratio: 0.5"></span> {{ $wine->wine_location }}</p>
                                    <p><span uk-icon="icon: tag; ratio: 0.5"></span> {{ $wine->grape }}</p>
                                    <p><span uk-icon="icon: clock; ratio: 0.5"></span> {{ $wine->vintage }}</p>
                                </div>
                                <div class="right-body-panel">
                                    <span class="bold">3.4</span>
                                    <p>{{ $wine->wine_ratings }}
                                        <span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span>
                                    </p>
                                    {{-- $wine->wine_ratings ?: 'Not rated yet' --}}
                                </div>
                            </div>
                            <form action="{{route('ratings.confirmclub')}}" method="post">
                                @csrf
                                @method('post')
                                <input type="hidden" name="wine_id" value="{{$wine->id}}">
                                <input class="club" type="hidden" name="club_id" value="">
                                <div ><button class="primary-btn primary-btn--center" type="submit">Rate Wine</button></div>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- End of content -->
@endsection

@section('scripts')

    <script type="text/javascript">

        jQuery(document).ready(function() {

            var url = $(location).attr('href'),
                parts = url.split("?"),
                last_part = parts[parts.length-1];

            $(".club").val(last_part);


        });

    </script>

@endsection
