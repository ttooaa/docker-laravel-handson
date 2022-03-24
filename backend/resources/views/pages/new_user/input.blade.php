{{-- 新規会員登録画面の入力項目 --}}
@extends('layouts.base')

@section('head_link')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<p class="inquiry-new-user">新規会員登録</p>

{{-- 後で変更↓ --}}
<form class="new-user-1 fonts" method="POST" action="">
    <div class="form-mail form-margin-top">
        <label class="dot-icon">お名前<span class="surely">必須</span></label>
        <div class="mail-pass-box">
            <input type="name" name="name" required >
        </div>
    </div>

    <div class="form-mail">
        <label class="dot-icon">メールアドレス<span class="surely">必須</span></label>
        <div class="mail-pass-box">
            <p>Eメールアドレス</p>
            <input type="email" name="email" >
        </div>
    </div>

    <div class="form-pass">
        <label class="dot-icon">パスワード<span class="surely">必須</span></label>
        <div class="mail-pass-box">
            <p>パスワード</p>
            <input type="password" name="password" >
        </div>
        <div class="mail-pass-box">
            <p>パスワード確認用</p>
            <input type="password" name="confirm_password" >
        </div>
    </div>

    <button class="button-none form-btn form-btn-color" type="submit">確認へ</button>
</form>
@endsection
