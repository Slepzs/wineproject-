<form action="{{ route('clubManagement.role', $user->id) }}" method="post">
    @csrf
    @method('patch')
    <select name="role_id" id="role" class="uk-select uk-inline uk-width-expand">
        @if($user->pivot->role_id == 3)
            <option value="3">Taster</option>
            <option value="2">Creator</option>
            <option value="1">Administrator</option>
        @elseif($user->pivot->role_id == 2)
            <option value="2">Creator</option>
            <option value="3">Taster</option>
            <option value="1">Administrator</option>
        @elseif($user->pivot->role_id == 1)
            <option value="1">Administrator</option>
            <option value="2">Creator</option>
            <option value="3">Taster</option>
        @endif
    </select>
    <button type="submit" class="crud-btn crud-btn--green"><span uk-icon="icon: happy"></span> Promote</button>
</form>
