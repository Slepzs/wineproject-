@foreach($wines as $winex)

    @foreach($winex->wine as $wine)
        <div class="list-card uk-card uk-card-default">
            <div class="icon-media">
                <img src="{{$wine->photo->file ?? '/images/wineclub-hero.jpg'}}" alt="Club wine image">
            </div>
            <div class="body-info">
                <div class="uk-card-badge">
                    <ul class="uk-navbar-nav uk-iconnav" uk-navbar="mode: click; boundary-align: true; align: center;">
                        <li>
                            <a href="#" class="uk-icon-button" uk-icon="icon: more-vertical"></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    @if(Auth::user()->name === $wine->user->name)
                                        <li><a href="{{route('admin.wines.edit', $wine->id)}}"><span uk-icon="icon: plus-circle"></span>Edit wine</a></li>
                                    @endif
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <h3 class="uk-card-title">{{ $wine->wine_name }}</h3>
                <p>Red wine{{ $wine->winecategory->name }}</p>
                <p>{{ $wine->producer }},  {{ $wine->vintage }}</p>
                {{ $club->getAverageClubRating($wine->id) }}
                <div class="wine-rating">
                    <p>3.5
                        <span uk-icon="icon: star; ratio: 0.5"></span>
                        <span uk-icon="icon: star; ratio: 0.5"></span>
                        <span uk-icon="icon: star; ratio: 0.5"></span>
                        <span uk-icon="icon: star; ratio: 0.5"></span>
                        <span uk-icon="icon: star; ratio: 0.5"></span><span class="bold"></span>
                    </p>
                </div>
                <div class="primary-btn primary-btn--center"><a href="{{ route('ratings.rate', [$wine->slug, $club->id]) }}">Rate Wine</a></div>
            </div>
        </div>

    @endforeach

@endforeach
