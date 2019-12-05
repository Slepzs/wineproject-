@extends('layouts.club.club')


@section('content')




    <!-- WINE LIST -->
    <div class="wine-list-section">
        <div class="uk-container uk-container--padding">
            <h2>All wines</h2>
            <a href="{{route('wines.create')}}">Upload Wine</a>
            <a href="{{route('ratings.choose')}}">Rate Wine</a>

            <div class="wine-panel">
                @foreach($wines as $wine)
                <div class="wine-card uk-card uk-card-default uk-card-hover">
                    <a href="">
                        <div class="wine-card-info uk-card-header">
                            <p class="uk-text-meta">{{ $wine->winecategory->name }}</p>
                            <h2 class="uk-card-title">{{ $wine->wine_name }}</h2>
                        </div>
                        <div class="wine-card-utility uk-card-body">
                            <div class="region-grape">
                                <ul class="uk-iconnav uk-iconnav-vertical">
                                    <li><span uk-icon="icon: world; ratio: 0.5"></span> {{ $wine->location }}</li>
                                    <li><span uk-icon="icon: paint-bucket; ratio: 0.5"></span> {{ $wine->grape }}</li>
                                </ul>
                            </div>
                            <div class="rating">
                                <p class="rate">3.24</p>
                                <p>
                                    <span class="rated" uk-icon="icon: star; ratio: 0.5"></span>
                                    <span class="rated" uk-icon="icon: star; ratio: 0.5"></span>
                                    <span class="rated" uk-icon="icon: star; ratio: 0.5"></span>
                                    <span uk-icon="icon: star; ratio: 0.5"></span>
                                    <span uk-icon="icon: star; ratio: 0.5"></span>
                                </p>
                            </div>
                        </div>
                        <div class="wine-card-btn uk-card-footer">
                            <a href="{{ route('wines.show', $wine->slug) }}" class="uk-button">View Wine</a>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- End of content -->
@endsection
