@if($club_amount == 0)
    <a href="{{route('clubs.create')}}" class="create-card uk-card uk-card-default uk-link-toggle">
        <div class="icon-media">
            <span uk-icon="icon: plus-circle; ratio: 2.5"></span>
        </div>
        <div class="body-info">
            <h3 class="uk-card-title">Create a Club</h3>
            <p>(3 slots available)</p>
        </div>
    </a>
@elseif($club_amount == 1)
    <a href="{{route('clubs.create')}}" class="create-card uk-card uk-card-default uk-link-toggle">
        <div class="icon-media">
            <span uk-icon="icon: plus-circle; ratio: 2.5"></span>
        </div>
        <div class="body-info">
            <h3 class="uk-card-title">Create a Club</h3>
            <p>(2 slots available)</p>
        </div>
    </a>
@elseif($club_amount == 2)
    <a href="{{route('clubs.create')}}" class="create-card uk-card uk-card-default uk-link-toggle">
        <div class="icon-media">
            <span uk-icon="icon: plus-circle; ratio: 2.5"></span>
        </div>
        <div class="body-info">
            <h3 class="uk-card-title">Create a Club</h3>
            <p>(1 slots available)</p>
        </div>
    </a>
@else
    <a href="#!" class="create-card uk-card uk-card-default uk-link-toggle">
        <div class="icon-media">
            <span uk-icon="icon: plus-circle; ratio: 2.5"></span>
        </div>
        <div class="body-info">
            <h3 class="uk-card-title">Create a Club</h3>
            <p>(0 slots available)</p>
        </div>
    </a>
@endif
