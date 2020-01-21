@isset($publicEvents)
    @foreach($publicEvents as $event)


            <div class="event-card uk-card uk-card-default uk-card-hover">
                <a href="#event-post">
                    <div class="uk-card-media-top">
                        <img src="{{ $event->photo->file ?? '/images/wineclub-hero.jpg' }}" alt="Event image">
                    </div>
                    <div class="event-card-info uk-card-header">
                        <div class="uk-card-badge uk-label">
                            @if($event->public == '0')
                                Public Event
                            @else
                                Private Event
                            @endif
                        </div>
                        <p class="uk-text-meta">{{ $event->location }}</p>
                        <h2 class="uk-card-title">{{$event->title}}</h2>
                    </div>
                    <div class="event-card-utility uk-card-body">
                        <div class="region-grape">
                            <ul class="uk-iconnav uk-iconnav-vertical">
                                <li><span uk-icon="icon: clock; ratio: 0.5"></span> {{ $event->date }}</li>
                                <li><span uk-icon="icon: location; ratio: 0.5"></span> {{ $event->location }}</li>
                            </ul>
                        </div>
                        <div class="rating">
                            <p class="rate">{{ $event->price }} DKK</p>
                            <p>pr. person</p>
                        </div>
                    </div>
                    <div class="event-card-btn uk-card-footer">
                        <a href="{{ route('events.show', $event->slug) }}" class="uk-button">Read More</a>
                    </div>
                </a>
            </div>

    @endforeach


    @else
@foreach($events as $eventx)
    @foreach($eventx as $event)

<div class="event-card uk-card uk-card-default uk-card-hover">
    <a href="#event-post">
        <div class="uk-card-media-top">
            <img src="{{ $event->photo->file ?? '/images/wineclub-hero.jpg' }}" alt="Event image">
        </div>
        <div class="event-card-info uk-card-header">
            <div class="uk-card-badge uk-label">
                @if($event->public == '0')
                    Public Event
                    @else
                    Private Event
                @endif
            </div>
            <p class="uk-text-meta">{{ $event->location }}</p>
            <h2 class="uk-card-title">{{$event->title}}</h2>
        </div>
        <div class="event-card-utility uk-card-body">
            <div class="region-grape">
                <ul class="uk-iconnav uk-iconnav-vertical">
                    <li><span uk-icon="icon: clock; ratio: 0.5"></span> {{ $event->date }}</li>
                    <li><span uk-icon="icon: location; ratio: 0.5"></span> {{ $event->location }}</li>
                </ul>
            </div>
            <div class="rating">
                <p class="rate">{{ $event->price }} DKK</p>
                <p>pr. person</p>
            </div>
        </div>
        <div class="event-card-btn uk-card-footer">
            <a href="{{ route('events.show', $event->slug) }}" class="uk-button">Read More</a>
        </div>
    </a>
</div>

    @endforeach
@endforeach

@endif
