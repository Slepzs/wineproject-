@extends('layouts.club.club')




@section('content')


    <div class="wine-crud-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>Create an event</h1>
                    <p>Events are public and everyone can sign up, but you're can accept if their welcome.</p>
                </div>
            </div>

            <!-- WINE CRUD -->
            <div class="club-crud-panel">

                <form class="crud-form crud-form--two-columns" method="POST" action="{{ route('events.update', $event->slug) }}" enctype="multipart/form-data">
                    @method('put')

                    <h3 class="">Update Event</h3>
                    @csrf
                    <div class="left-form-panel">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Event Title</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input" type="text"  name="title" value="{{ $event->title }}">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Event Location / Address / Region</label>
                            <input class="uk-input" type="input"  name="location" value="{{ $event->location }}">
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Event Date</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input" type="date"  name="date" value="{{ $event->date }}">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Event Price</label>
                            <div class="uk-inline uk-width-expand">
                                <input class="uk-input" type="text"  name="price" value="{{ $event->price }}">
                            </div>
                        </div>

                    </div>
                    <div class="right-form-panel">

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Public/Private Event</label>
                            <select class="uk-select uk-inline uk-width-expand" name="public">
                                <option value="{{ $event->public }}">{{ $event->public === 0 ? "Public Event" : "Private Event" }}</option>
                                <option value="0">Public Event</option>
                                <option value="1">Private Event</option>
                            </select>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Event image</label>
                            <div class="uk-inline uk-width-expand js-upload" uk-form-custom="target: true">
                                <input type="file" name="photo_id" multiple type="button" tabindex="-1">
                                <input class="uk-input" type="text" placeholder="Select file" disabled>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Event Description</label>
                            <div class="uk-inline uk-width-expand">
                                <textarea style="height: 135px" class="uk-textarea" rows="2" name="description">{{ $event->description }}</textarea>
                            </div>
                        </div>
                        <div class="uk-margin" uk-margin>
                            <button class="uk-button uk-button-default primary-btn" type="submit">Update Event</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>



@endsection

@section('scripts')


@endsection
