@extends('layouts.app')


@section('content')

    <!-- LOGIN -->
    <div class="login-register-section">
        <div class="uk-container uk-container--padding">

            <!-- CLUB INTRO TEXT -->
            <div class="club-info">
                <div class="info-body">
                    <h1>Sign in</h1>
                    <p>Sign in to continue to My Wine Club dashboard</p>
                </div>
            </div>

            <!-- LOGIN / REGISTER -->
            <div class="club-login-register">
                <form class="signin-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="uk-margin">
                        <label class="uk-form-label" for="email">Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="email" id="email" required autocomplete="email" autofocus>
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
                            <input class="uk-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" type="password" id="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <input class="uk-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me!
                        </div><!-- form-check-input-->
                    </div>

                    <div class="uk-margin signin-btn">
                        <button class="uk-button uk-button-default primary-btn" type="submit">Sign in</button>
                    </div>

                    <div class="bottom-form-group">
                        <div class="">
                            @if (Route::has('password.request'))
                                <a class="uk-button link-text" href="{{ route('password.request') }}">
                                    Forgot your password? - No worries we got your back! <span uk-icon="icon: happy; ratio: 0.6"></span>
                                </a>
                            @endif
                        </div>
                        <div class="">
                            <a class="uk-button link-text link-text--bold" href="{{ route('register') }}">
                                Not a member yet? Join now -- it's free!
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
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}


@endsection
