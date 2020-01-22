@foreach($events as $event)


    <div class="profile-card uk-card uk-card-default event-card">

        <div class="body-info">
            <img class="event-image" src="{{ $event->photo->file ?? 'No Image' }}" alt="Club member image">
            <div class="event-title">
                <h3 class="uk-card-title">Title</h3>
                <a href="{{ route('events.show', $event->slug) }}"> <p>{{ $event->title }}</p></a>
            </div>
            <div class="event-description">
                <h3 class="uk-card-title">Location</h3>
                <p>{{ $event->location }}</p>
            </div>
            <div class="event-price">
                <h3 class="uk-card-title">Price</h3>
                <p>{{ $event->price }}</p>
            </div>
            <div class="event-date">
                <h3 class="uk-card-title">Date</h3>
                <p>{{ $event->date }}</p>
            </div>
            <div class="uk-card-badge">
                <ul class="uk-navbar-nav uk-iconnav" uk-navbar="mode: click; boundary-align: true; align: center;">
                    <li>
                        <a href="#" class="uk-icon-button" uk-icon="icon: more-vertical"></a>
                            <div class="uk-navbar-dropdown" uk-dropdown="pos: right-center">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    @if($club->Owner($club->id))
                                        <li>
                                            <a href="{{ route('events.edit', $event->slug) }}"><span uk-icon="icon: pencil"></span>Edit Event</a>
                                        </li>
                                        <li class="uk-nav-divider"></li>
                                        <form action="{{ route('events.destroy', $event->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <li><button type="submit"><span uk-icon="icon: minus-circle"></span>Remove Event</button></li>
                                        </form>
                                    @endif
                                </ul>
                            </div>
                    </li>
                </ul>
            </div>

        </div>

    </div>



@endforeach
