@extends('layouts.admin.admin')




@section('content')

    <!-- PROFILE OVERVIEW -->
    <div class="profile-overview-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>Profile</h1>
                    <p>This is an overview of all the clubs that you have created. Accept people, who want to join Your wine club or edit club details
                        - It's all up to you! <span uk-icon="icon: happy; ratio: 0.8"></span></p>
                </div>
            </div>

            <!-- PROFILE CRUD -->
            <div class="club-crud-panel">
                @if($errors)

                    @foreach ($errors->all() as $message)

                        {{$message}}

                    @endforeach

                @endif

                <form class="crud-form crud-form--two-columns" method="POST" action="{{route('admin.users.update', $user->id ) }}"  enctype="multipart/form-data">
                    <h3 class="">Edit your profile information</h3>
                    @csrf
                    @method('put')
                    <div class="left-form-panel">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Name</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input" type="text" value="{{$user->name}}" name="name">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Lastname</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input" type="text" value="{{$user->last_name ?? ''}}" name="last_name">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Nickname</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input" type="text" placeholder="Nickname" value="{{$user->nickname ?? ''}}" name="nickname">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Email</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input" type="email" value="{{$user->email}}" name="email">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Profile image</label>
                            <div class="uk-inline uk-width-expand js-upload" uk-form-custom="target: true">
                                <input type="file" name="photo_id" multiple type="button" tabindex="-1">
                                <input class="uk-input" type="text" placeholder="Select file" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="right-form-panel">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Biography</label>
                            <div class="uk-inline uk-width-expand">
                                <textarea class="uk-textarea" rows="5" placeholder="{{$user->bio ?? ''}}" value="{{$user->bio ?? ''}}" name="bio"></textarea>
                            </div>
                        </div>
                        <div class="uk-margin" uk-margin>
                            <button class="uk-button uk-button-default primary-btn" type="submit">Update profile</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>



@endsection
