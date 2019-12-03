@extends('layouts.admin.admin')




@section('content')






    <div class="admin-forms" style="display: grid; grid-template-columns: 1fr 1fr">

        <form method="post" action="{{ route('wines.update', $wine->id) }}" enctype="multipart/form-data">
            <fieldset class="uk-fieldset">
                @csrf
                @method('put')
                <div class="uk-margin">
                    <select name="category_id" class="uk-select">
                        <option value="{{$wine->winecategory->id}}">Red Wine</option>
                        <option value="1">Red Wine</option>
                        <option value="2">White Wine</option>
                        <option value="3">Rosé Wine</option>
                        <option value="4">Port Wine</option>
                    </select>
                </div>
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Wine Name eg. Cabernet Sauvignon" name="wine_name" value="{{$wine->wine_name }}" >
                </div>
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Producer eg. Spier" name="producer" value="{{$wine->producer }}">
                </div>
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Vintage eg. 2016" name="vintage" value="{{$wine->vintage}}">
                </div>
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Grape/Blend" name="grape" value="{{$wine->grape}}">
                </div>
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Alcohol Content 13.5%" name="alcohol_content" value="{{$wine->alcohol_content}}">
                </div>
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Wine Price" name="wine_price" value="{{$wine->wine_price}}">
                </div>

                <div class="uk-margin">
                    <select name="bottle_size" class="uk-select">
                        <option value="{{$wine->bottle_size }}">{{$wine->bottle_size }}</option>
                        <option value="All Sizes">All Sizes</option>
                        <option value="Bottles">Bottles</option>
                        <option value="Cases">Cases</option>
                        <option value="Half bottles">Half bottles</option>
                        <option value="Magnums">Magnums</option>
                        <option value="Double Magnums">Double Magnums</option>
                        <option value="Other sizes">Other sizes</option>
                        <option value="Half bottles">Half bottles</option>
                    </select>
                </div>

                <label for="address_address">Address</label>
                <input type="text" id="address-input" name="address_address" class="form-control map-input" value="{{$wine->winelocations->address_address}}">
                <input type="hidden" name="address_latitude" id="address-latitude" value="{{$wine->winelocations->address_latitude}}" />
                <input type="hidden" name="address_longitude" id="address-longitude" value="{{$wine->winelocations->address_longitude}}" />

                <div class="uk-margin" uk-margin>
                    <div uk-form-custom="target: true">
                        <input type="file" name="photo_id">
                        <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                    </div>
                </div>

                <button class="uk-button uk-button-default">Submit</button>
            </fieldset>
        </form>
        <div class="maps">
            <div id="address-map-container" style="width:100%;height:400px; ">
                <div style="width: 100%; height: 100%" id="address-map"></div>
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
                    zoom: 4
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
