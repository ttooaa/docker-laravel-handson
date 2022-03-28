{{-- ログインページ --}}
@extends('layouts.base')
@section('title','キョウのワダイ-ログイン')

@section('head_link')
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

@endsection

@section('content')
    <div id="body">
        <div class="opacity-1">
            <div class="login-wrap">
                <div class="login-html">
                    @if (session('status'))
                        <input id="tab-1" type="radio" name="tab" class="sign-in"><label for="tab-1" class="tab">{{ __('Login') }}</label>
                        <input id="tab-2" type="radio" name="tab" class="for-pwd" checked><label for="tab-2" class="tab">{{ __('Forgot Your Password?') }}</label>
                    @else
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">{{ __('Login') }}</label>
                        <input id="tab-2" type="radio" name="tab" class="for-pwd" @error('email') checked @enderror><label for="tab-2" class="tab">{{ __('Forgot Your Password?') }}</label>
                    @endif

                    <div class="login-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="sign-in-htm">
                                <div class="group">
                                    <label for="name" class="label">{{ __('Name') }}</label>
                                    <input id="name" type="name" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">{{ __('Password') }}</label>
                                    <input id="pass" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
                                    <input type="submit" class="button" value={{ __('Login') }}>

                                </div>
                                <div class="hr"></div>
                            </div>
                        </form>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="for-pwd-htm">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <div class="group">
                                    <label for="email-2" class="label">{{ __('Email Address') }}</label>
                                    {{-- <input id="email-2" type="text" name="email" class="input" onkeyup="copyTo('email-2','email-1')"> --}}
                                    <input id="email-2" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value={{ __('Send Password Reset Link') }}>
                                </div>
                                <div class="hr"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
