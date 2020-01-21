@foreach($events as $event)

    <div class="profile-card uk-card uk-card-default event-card">

        <div class="body-info">
            <img class="event-image" src="{{ $event->photo->file ?? 'No Image' }}" alt="Club member image">
            <div class="event-title">
                <h3 class="uk-card-title">Title</h3>
                <p>{{ $event->title }}</p>
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
            <div class="event-join">
                <a class="primary-btn primary-btn--center" href="{{ route('events.show', $event->id) }}">Join</a>
            </div>

        </div>

    </div>

@endforeach
