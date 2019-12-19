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
                            @if(Auth::user()->name === $wine->user->name)
                            <a href="#" class="uk-icon-button" uk-icon="icon: more-vertical"></a>

                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">

                                        <li><a href="{{route('admin.wines.edit', $wine->id)}}"><span uk-icon="icon: plus-circle"></span>Edit wine</a></li>

                                </ul>
                                @if($club->ClubAdmin($club->id))
                                    <form action="{{ route('clubs/lock', $wine->id)  }}" method="post" >
                                        @csrf
                                        @method('patch')
                                        <input type="hidden" name="club_id" value="{{$club->id}}">
                                        @if($club->isLocked($wine->id, $club->id))
                                            <button class="" type="submit">
                                                <span uk-icon="unlock"></span> Unlock Wine
                                            </button>
                                        @else
                                            <button class="" type="submit">
                                                <span uk-icon="lock"></span> Lock Wine
                                            </button>

                                        @endif
                                    </form>
                                @endif
                            </div>
                            @endif
                        </li>
                    </ul>
                </div>
                <h3 class="uk-card-title">{{ $wine->wine_name }}</h3>
                <p>{{ $wine->winecategory->name }}</p>
                <p>{{ $wine->producer }},  {{ $wine->vintage }}</p>

                <div class="wine-rating">
                        <p>{{ $club->getAverageClubRating($wine->id) }}</p>
                        <input class="myrating" data-size="xs" data-min=0 data-max=10 data-step=1 id="input-{{$wine->id}}" value="{{ $club->getAverageClubRating($wine->id) ?? "0" }}" >
                    </p>
                </div>
                @if($club->isLocked($wine->id, $club->id))
                    <div class="primary-btn primary-btn--center wines-lock">
                        <a href="{{ route('wines.show', $wine->slug) }}">View Wine</a>
                    </div>
                    @else
                    <div class="primary-btn primary-btn--center wines-lock">
                        <a href="{{ route('ratings.rate', [$wine->slug, $club->id]) }}">Rate Wine</a>
                    </div>
                    @endif

            </div>
        </div>

    @endforeach

@endforeach
