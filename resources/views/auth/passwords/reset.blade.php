@extends('layouts.app')


@section('content')

    <!-- RESET PASSWORD -->
    <div class="login-register-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>Reset password</h1>
                    <p>Forgot your password?<br/> Don't worry, we are here to help you get back to your wine club</p>
                </div>
            </div>

            <!-- LOGIN / REGISTER -->
            <div class="club-login-register">
                <form class="signin-form" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="uk-margin">
                        <label class="uk-form-label" for="email">Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" type="email" id="email" required autocomplete="email" autofocu>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="password">Password</label>
                        <div class="uk-form-controls">
                            <input class="uk-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" type="password" id="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="password-confirm">Confirm Password</label>
                        <div class="uk-form-controls">
                            <input class="uk-input form-control" name="password_confirmation" required autocomplete="new-password" type="password" id="password-confirm">
                        </div>
                    </div>

                    <div class="uk-margin signin-btn">
                        <button class="uk-button uk-button-default primary-btn" type="submit">Reset password</button>
                    </div>
                </form>
            </div>

        </div>
    </div>




{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                                    {{ __('Reset Password') }}
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
