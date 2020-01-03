@extends('layouts.club.club')


@section('content')

    <!-- WINE PROFILE OVERVIEW -->
    <div class="club-profile-section">
        <div class="uk-container uk-container--padding">

            <!-- WINE PROFILE -->
            <div class="club-profile">

                <div class="profile-card profile-card--main uk-card uk-card-default">
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
                                            @if(Auth::user()->name === $wine->user->name)
                                                <li><a href="{{route('admin.wines.edit', $wine->id)}}"><span uk-icon="icon: plus-circle"></span>Edit wine</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="uk-card-title">{{ $wine->wine_name }}</h3>
                        <p>{{ $wine->winecategory->name }}</p>
                        <p><span uk-icon="icon: user; ratio: 0.5"></span> {{ $wine->producer }}</p>
                        @if(!$locked->isLocked($wine->id, $club))
                        <input id="input-21f" value="{{ $rating ?? 0 }}" type="text" data-min=0 data-max=10 data-step=1 data-size="md" data-club="{{ $club }}" data-wine="{{ $wine->id }}" data-user="{{ Auth::user()->id }}" title="">
                        @endif

                        <a class="primary-btn primary-btn--center" href="{{ URL::previous() }}">Go back</a>

                    </div>
                </div>

                <div class="profile-card uk-card uk-card-default">
                    <div class="body-info">
                        <h4 class="uk-card-title">Description</h4>
                        <p>Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. </p>
                        <p>{{-- $wine->bio ?: 'Write a description about yourself...' --}}</p>
                    </div>
                </div>

                <div class="profile-card uk-card uk-card-default">
                    <div class="body-info body-info--expand">
                        <h4 class="uk-card-title">Details</h4>
                        <div class="body-info-columns">
                            <div class="left-body-panel">
                                <p>Country / Region: {{ $wine->wine_location }}</p>
                                <p>Grape: {{ $wine->grape }}</p>
                                <p>Year: {{ $wine->vintage }}</p>
                                <p>Volume (%): {{ $wine->alcohol_content }}</p>
                                <p>Size (cl): {{ $wine->bottle_size }}</p>
                            </div>
                            <div class="right-body-panel">
                                <p>Rating</p>
                                <span class="bold">3.4</span>
                                <p>{{ $wine->wine_ratings }}
                                    <span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span><span uk-icon="icon: star; ratio: 0.5"></span>
                                </p>
                                <p>Value</p>
                                <p>59.2{{-- $wine->grape --}}</p>
                            </div>
                        </div>
                        <div class="body-info-columns">
                            <div class="left-body-panel">
                                <p>Price</p>
                                <p>{{ $wine->wine_price }}</p>
                            </div>
                            <div class="right-body-panel">
                                <p>Real price</p>
                                <p>{{ $wine->wine_price }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>



@endsection

@section('scripts')

    <script>
        jQuery(document).ready(function () {
            $("#input-21f").rating({
                starCaptions: function (val) {
                    if (val < 10) {
                        return val;
                    }
                },
                starCaptionClasses: function (val) {
                    if (val < 3) {
                        return 'label label-danger';
                    } else {
                        return 'label label-success';
                    }
                },
                hoverOnClear: false,
                showClear: false,
                showCaption: false
            });
            console.log($(this).val());

            let club_id = $("#input-21f").attr("data-club");
            let user_id = $("#input-21f").attr("data-user");
            let wine_id = $("#input-21f").attr("data-wine");

            $('#input-21f').on('rating:change', function(event, value, caption) {


                let rating = value;
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "/ratings/rated/"+wine_id,
                    type: 'post',
                    data: {
                        "club_id": club_id,
                        "user_id": user_id,
                        "rating": rating
                    },
                    dataType: "json",
                    success: function (data) {
                        console.log(data);
                    }
                });
            });
        });
    </script>
@endsection
