@if(Auth::user())
    @if($signedUp)
        <h3>You have already signed up, for this event.</h3>
        <form action="{{ route('events.remove', $event->id)  }}" method="post">
            @csrf
            @method('delete')
            <button class="uk-button uk-button-default primary-btn" type="submit">Can't come? Cancel</button>
        </form>
    @else
<div class="event-joinevent">
    <form class="event-form" method="post" action="{{route('events.join')}}">
        @csrf
        <input type="hidden" name="event_id" value="{{ $event->id }}">
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <h3 class="">Join our event</h3>
        <div class="left-contact-panel">
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Name</label>
                <div class="uk-inline uk-width-expand">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input class="uk-input" type="text" name="name" value="{{Auth::user()->name}}">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Email</label>
                <div class="uk-inline uk-width-expand">
                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                    <input class="uk-input" type="email" name="email" value="{{Auth::user()->email}}">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Guests</label>
                <div class="uk-inline uk-width-expand">
                    <span class="uk-form-icon" uk-icon="icon: users"></span>
                    <input class="uk-input" type="number" min="1" max="10" name="guests" placeholder="">
                </div>
            </div>
        </div>
        <div class="right-contact-panel">
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Message</label>
                <div class="uk-inline uk-width-expand">
                    <!--<span class="uk-form-icon" uk-icon="icon: comment"></span>-->
                    <textarea class="uk-textarea" rows="5" name="description"></textarea>
                </div>
            </div>
            <div class="uk-margin" uk-margin>
                <button class="uk-button uk-button-default primary-btn" type="submit">Join event</button>
            </div>
        </div>
    </form>
</div>
    @endif
@else
<div class="event-joinevent">
    <h3 class="">Join our event</h3>
    <p>Sign up to join an event</p>
</div>

@endif
