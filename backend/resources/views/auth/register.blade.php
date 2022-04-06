{{-- 新規会員登録画面の入力項目 --}}
@extends('layouts.base')
@section('title','キョウのワダイ-新規会員登録')

@section('head_link')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('position-2', 'linkPosition')

@section('content')
<p class="title new-user">{{ __('Register') }}</p>

{{-- 後で変更↓ --}}
<form class="new-user-1 fonts" method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-mail form-margin-top">
        <label for="name" class="dot-icon">{{ __('Name') }}<span class="surely">必須</span></label>
        <div class="mail-pass-box">
            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-mail">
        <label for="email" class="dot-icon">{{ __('Email Address') }}<span class="surely">必須</span></label>
        <div class="mail-pass-box">
            <p>Eメールアドレス</p>
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-pass">
        <label class="dot-icon">{{ __('Password') }}<span class="surely">必須</span></label>
        <div class="mail-pass-box">
            <p>{{ __('Password') }}</p>
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mail-pass-box">
            <p>確認用パスワード</p>
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <button class="button-none form-btn form-btn-color" type="submit">登録</button>
</form>
@endsection
