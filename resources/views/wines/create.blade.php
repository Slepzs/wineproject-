@extends('layouts.club.club')




@section('content')


    <div class="wine-crud-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>Create a new wine</h1>
                    <p>Create and upload a new wine. Be sure to search for it before you upload a new one</p>
                </div>
            </div>

            <!-- WINE CRUD -->
            <div class="club-crud-panel">

                <form class="crud-form crud-form--two-columns" method="POST" action="{{route('wines.store')}}" enctype="multipart/form-data">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <h3 class="">Create Wine</h3>
                    @csrf
                    <div class="left-form-panel">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">What type?</label>
                            <select class="uk-select uk-inline uk-width-expand" name="category_id">
                                <option value="1">Red Wine</option>
                                <option value="2">White Wine</option>
                                <option value="3">Rosé Wine</option>
                                <option value="4">Port Wine</option>
                            </select>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Wine name</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input" type="text"  name="wine_name">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Producer</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input" type="text"  name="producer">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Vintage (Year)</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input" type="text" placeholder="Year"  name="vintage">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Grape / Blend</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input" type="text" name="grape" placeholder="Cabernet Sauvignon eg.">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Alcohol content (%)</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input" type="text"  name="alcohol_content" placeholder="13.5%">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Wine price</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input" type="text"  name="wine_price" placeholder="60">
                            </div>
                        </div>
                    </div>
                    <div class="right-form-panel">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Size of the bottle</label>
                            <select class="uk-select uk-inline uk-width-expand" name="bottle_size">
                                <option value="All Sizes">All Sizes</option>
                                <option value="Bottles">Bottles</option>
                                <option value="Half bottles">Half bottles</option>
                                <option value="Cases">Cases</option>
                                <option value="Magnums">Magnums</option>
                                <option value="Double Magnums">Double Magnums</option>
                                <option value="Other sizes">Other sizes</option>
                            </select>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Wine image</label>
                            <div class="uk-inline uk-width-expand js-upload" uk-form-custom="target: true">
                                <input type="file" name="photo_id" multiple type="button" tabindex="-1">
                                <input class="uk-input" type="text" placeholder="Select file" disabled>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Country / Region</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input map-input" id="address-input" type="text" name="address_address">
                                <input class="uk-input" id="address-latitude" type="hidden" name="address_latitude">
                                <input class="uk-input" id="address-longitude" type="hidden" name="address_longitude">
                            </div>
                        </div>
                        <div class="uk-margin maps">
                            <div id="address-map-container" style="height: 290px">
                                <div style="width: 100%; height: 100%" id="address-map"></div>
                            </div>
                        </div>
                        <div class="uk-margin" uk-margin>
                            <button class="uk-button uk-button-default primary-btn" type="submit">Create Wine</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>



@endsection

@section('scripts')
    <script type="text/javascript">
        function initialize() {

            $('form').on('keyup keypress', function(e) {
                var keyCode = e.keyCode || e.which;
                if (keyCode === 13) {
                    e.preventDefault();
                    return false;
                }
            });
            const locationInputs = document.getElementsByClassName("map-input");

            const autocompletes = [];
            const geocoder = new google.maps.Geocoder;
            for (let i = 0; i < locationInputs.length; i++) {

                const input = locationInputs[i];
                const fieldKey = input.id.replace("-input", "");
                const isEdit = document.getElementById(fieldKey + "-latitude").value != '' && document.getElementById(fieldKey + "-longitude").value != '';

                const latitude = parseFloat(document.getElementById(fieldKey + "-latitude").value) || -33.8688;
                const longitude = parseFloat(document.getElementById(fieldKey + "-longitude").value) || 151.2195;

                const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {
                    center: {lat: latitude, lng: longitude},
                    zoom: 13
                });
                const marker = new google.maps.Marker({
                    map: map,
                    position: {lat: latitude, lng: longitude},
                });

                marker.setVisible(isEdit);

                const autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.key = fieldKey;
                autocompletes.push({input: input, map: map, marker: marker, autocomplete: autocomplete});
            }

            for (let i = 0; i < autocompletes.length; i++) {
                const input = autocompletes[i].input;
                const autocomplete = autocompletes[i].autocomplete;
                const map = autocompletes[i].map;
                const marker = autocompletes[i].marker;

                google.maps.event.addListener(autocomplete, 'place_changed', function () {
                    marker.setVisible(false);
                    const place = autocomplete.getPlace();

                    geocoder.geocode({'placeId': place.place_id}, function (results, status) {
                        if (status === google.maps.GeocoderStatus.OK) {
                            const lat = results[0].geometry.location.lat();
                            const lng = results[0].geometry.location.lng();
                            setLocationCoordinates(autocomplete.key, lat, lng);
                        }
                    });

                    if (!place.geometry) {
                        window.alert("No details available for input: '" + place.name + "'");
                        input.value = "";
                        return;
                    }

                    if (place.geometry.viewport) {
                        map.fitBounds(place.geometry.viewport);
                    } else {
                        map.setCenter(place.geometry.location);
                        map.setZoom(17);
                    }
                    marker.setPosition(place.geometry.location);
                    marker.setVisible(true);

                });
            }
        }

        function setLocationCoordinates(key, lat, lng) {
            const latitudeField = document.getElementById(key + "-" + "latitude");
            const longitudeField = document.getElementById(key + "-" + "longitude");
            latitudeField.value = lat;
            longitudeField.value = lng;
        }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>

    @endsection
