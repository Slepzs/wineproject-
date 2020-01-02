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

                        </div>
                        <h3 class="uk-card-title">{{ $wine->wine_name }}</h3>
                        <p>{{ $wine->winecategory->name }}</p>
                        <p><span uk-icon="icon: user; ratio: 0.5"></span> {{ $wine->producer }}</p>
                    </div>
                    <div style="width: 35%; margin: 10px 0px">
                        <button class="primary-btn primary-btn--center" onclick="club()" href="#modal-example" uk-toggle>
                            Pick Club
                        </button>
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



    <div id="modal-example" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title">Pick Club</h2>

            <div id="clubs">
                @if(count($clubs) > 0)
                    @foreach($clubs as $club)

                        <div class="choosewine">
                            <img class="" src="{{$club->clubinformation->photo->file ?? '/images/wineclub-hero.jpg'}}" alt="">
                            <form action="{{route('ratings.confirmclub')}}" method="post">
                                @csrf
                                @method('post')
                                <input type="hidden" name="club_id" value="{{$club->id}}">
                                <input type="hidden" name="wine_id" value="{{$wine->id}}">
                                <button class="primary-btn-choose" type="submit">{{$club->name}}</button>
                            </form>
                        </div>

                        @endforeach

                    @endif
            </div>


            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            </p>
        </div>
    </div>

    <!-- End of content -->
@endsection

@section('scripts')

@endsection
