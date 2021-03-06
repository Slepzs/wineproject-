
@foreach($allusers as $users)
    <div class="profile-card uk-card uk-card-default">
        <div class="body-info">
            <img class="member-image" src="/images/wineclub-hero.jpg" alt="Club member image">
            <div class="member-name">
                <h3 class="uk-card-title">Fullname</h3>
                <p>{{ $users->name }}</p>
            </div>
            <div class="member-nickname">
                <h3 class="uk-card-title">Nickname</h3>
                <p>#{{ $users->nickname ?: 'Nothing set' }}</p>
            </div>
            <div class="member-role">
                <h3 class="uk-card-title">Role</h3>
                <p>{{ $users->GetRole($users->id, $users->pivot->club_id) }}</p>
            </div>
        </div>
    </div>


@endforeach
