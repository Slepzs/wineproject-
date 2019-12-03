@extends('layouts.club.club')


@section('content')




    <!-- WINE LIST -->
    <div class="wine-list-section">
        <div class="uk-container uk-container--padding">
            <a href="{{route('wines.create')}}">Upload Wine</a>
            <h2>All wines</h2>
            Implementer search her <input type="search">
            <div class="wine-panel">
                @foreach($wines as $wine)
                <div class="wine-card uk-card uk-card-default uk-card-hover">
                    <a href="{{ url('/vin-spiritus-post') }}">
                        <div class="wine-card-info uk-card-header">
                            @if(Auth::user()->name === $wine->user->name)
                            <a href="{{route('admin.wines.edit', $wine->id)}}"><div class="uk-card-badge uk-label"><span style="color: black" uk-icon="icon: paint-bucket; ratio: 0.5"></span></div></a>
                            @endif
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
                            <a href="{{ route('wines.show', $wine->slug) }}" class="uk-button">Læs mere</a>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- End of content -->
@endsection
