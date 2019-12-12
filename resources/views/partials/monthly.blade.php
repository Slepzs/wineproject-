<!-- Monthly wine -->
@if($wines ?? '')
    @foreach($wines as $wine)
    <div class="topwine-section">
        <div class="wine-panel uk-container uk-container--expand">
            <h2>Månedens vin</h2>

            <div class="wine-body">
                <div class="wine-body-info">
                    <p class="wine-meta">{{ $wine->winecategory->name ?? '' }}</p>
                    <h3 class="wine-title">{{$wine->wine_name ??  ''}}</h3>
                    <div class="wine-body-desc">
                        <div class="region">
                            <h4>Land / Region</h4>
                            <p>{{ $wine->winelocations->address_adress ?? 'NO INFORMATION' }}</p>
                        </div>
                        <div class="grapes">
                            <h4>Grape(s)</h4>
                            <p>{{ $wine->grape ?? '' }}</p>
                        </div>
                        <div class="year">
                            <h4>Årgang</h4>
                            <p>{{ $wine->vintage ?? '' }}</p>
                        </div>
                    </div>
                    <p class="description">Nunc sed sem finibus, finibus metus non, egestas sapien. Nunc ut molestie elit. Praesent elementum blandit finibus. Integer congue eleifend consectetur. Phasellus mollis posuere lacus ac maximus.</p>
                </div>
                <div class="wine-body-utility">
                    <div class="volume-size">
                        <ul class="uk-iconnav uk-iconnav-vertical">
                            <li><span>Volume %</span><br/> {{ $wine->alcohol_content }} %</li>
                            <li><span>Size cl</span><br/> 0.75 cl</li>
                        </ul>
                    </div>
                    <div class="rating">
                        <span>Rating</span>
                        <p class="rate">{{ $wine->AverageRating }}</p>
                        <div class="rating-star">
                            <span class="rated" uk-icon="icon: star; ratio: 0.5"></span>
                            <span class="rated" uk-icon="icon: star; ratio: 0.5"></span>
                            <span class="rated" uk-icon="icon: star; ratio: 0.5"></span>
                            <span class="rated" uk-icon="icon: star; ratio: 0.5"></span>
                            <span uk-icon="icon: star; ratio: 0.5"></span>
                        </div>
                        <span>Value</span>
                        <p class="value">59.2</p>
                    </div>
                    <div class="pricetag">
                        <ul class="uk-iconnav uk-iconnav-vertical">
                            <li><span>Pris</span><br/> {{ $wine->wine_price }} DKK</li>
                            <li><span>Rigtig pris</span><br/> {{ $wine->wine_price }} DKK</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="wine-image-panel">
            <img src="{{ $wine->photo->file ?? '/images/wineclub-hero.jpg' }}" alt="Top wine">
        </div>
    </div>
    @endforeach
@endif
