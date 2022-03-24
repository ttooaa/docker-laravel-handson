{{-- 新規会員登録画面の入力項目 --}}
@extends('layouts.base')

@section('head_link')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<p class="title new-user">{{ __('Register') }}</p>

{{-- 後で変更↓ --}}
<form class="new-user-1 fonts" method="POST" action="">
    @csrf

    <div class="form-mail form-margin-top">
        <label class="dot-icon">{{ __('Name') }}<span class="surely">必須</span></label>
        <div class="mail-pass-box">
            {{-- <input type="name" name="name" required > --}}

            <input type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-mail">
        <label class="dot-icon">{{ __('Email Address') }}<span class="surely">必須</span></label>
        <div class="mail-pass-box">
            <p>Eメールアドレス</p>
            <input type="email" name="email" >
        </div>
    </div>

    <div class="form-pass">
        <label class="dot-icon">{{ __('Password') }}<span class="surely">必須</span></label>
        <div class="mail-pass-box">
            <p>{{ __('Password') }}</p>
            <input type="password" name="password" >
        </div>
        <div class="mail-pass-box">
            <p>確認用パスワード</p>
            <input type="password" name="confirm_password" >
        </div>
    </div>

    <button class="button-none form-btn form-btn-color" type="submit">登録</button>
</form>
@endsection
