ログインページ
@extends('layouts.base')

@section('head_link')
    <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        {{-- <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
@endsection

@section('content')
    <main class="wrapper">
        <div class="opacity-1">
            <div class="login-wrap">
                <div class="login-html">
                    <form method="POST">
                        @csrf

                        @if (session('status'))
                            <input id="tab-1" type="radio" name="tab" class="sign-in"><label for="tab-1" class="tab">{{ __('Login') }}</label>
                            <input id="tab-2" type="radio" name="tab" class="for-pwd" checked><label for="tab-2" class="tab">{{ __('Forgot Your Password?') }}</label>
                        @else
                            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">{{ __('Login') }}</label>
                            <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">{{ __('Forgot Your Password?') }}</label>
                        @endif

                        <div class="login-form">
                            <div class="sign-in-htm">
                                <div class="group">
                                    <label for="email" class="label">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" name="email" class="input">
                                    {{-- <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}

                                    {{-- @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">{{ __('Password') }}</label>
                                    <input id="pass" type="password" name="password" class="input" data-type="password">
                                    {{-- <input id="pass" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> --}}

                                    {{-- @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>

                                <div class="col-md-7 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="group martop">
                                    <input type="submit" class="button" value={{ __('Login') }} formaction="{{ route('login') }}">
                                </div>
                                <div class="hr"></div>
                            </div>
                            <div class="for-pwd-htm">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <div class="group">
                                    <label for="email" class="label">{{ __('Email Address') }}</label>
                                    <input id="email" type="text" name="email" class="input">
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value={{ __('Send Password Reset Link') }} formaction="{{ route('password.email') }}">
                                </div>
                                <div class="hr"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
