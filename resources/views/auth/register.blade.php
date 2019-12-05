@extends('layouts.app')


@section('content')

    <!-- REGISTER -->
    <div class="login-register-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>Sign up</h1>
                    <p>Join for free and enjoy a community that shares the same passion for wine</p>
                </div>
            </div>

            <!-- LOGIN / REGISTER -->
            <div class="club-login-register">
                <form class="signin-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="uk-margin">
                        <label for="name" class="uk-form-label">Name</label>
                        <div class="uk-form-controls">
                            <input id="name" type="text" class="uk-input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="email" class="uk-form-label">Email</label>
                        <div class="uk-form-controls">
                            <input id="email" type="email" class="uk-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="password" class="uk-form-label">Password</label>
                        <div class="uk-form-controls">
                            <input id="password" type="password" class="uk-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="password-confirm" class="uk-form-label">Confirm Password</label>
                        <div class="uk-form-controls">
                            <input id="password-confirm" type="password" class="uk-input form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="uk-margin signin-btn">
                        <button type="submit" class="uk-button uk-button-default primary-btn">Sign up for free</button>
                    </div>

                    <div class="bottom-form-group">
                        <div class="">
                            <a class="uk-button link-text" href="{{ route('login') }}">
                                Already a member of our wine club? - <span class="link-text--bold">Sign in here!</span> <span uk-icon="icon: happy; ratio: 0.6"></span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>


{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-nadnad" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-nadnad" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}


@endsection
