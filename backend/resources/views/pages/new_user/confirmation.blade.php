{{-- 新規会員登録画面の確認項目 --}}
@extends('layouts.base')

@section('content')
<p class="inquiry-new-user">新規会員登録</p>
<ol class="stepBar stepBer-color">
    <li class="visited-color"><span>1</span><br>入力</li>
    <li class="visited-color"><span>2</span><br>確認</li>
    <li><span>3</span><br>完了</li>
</ol>
{{-- 後で変更↓ --}}
<form class="new-user-2" method="POST" action="">
    <div class="form-mail form-margin-top">
        <label class="dot-icon">メールアドレス<span class="surely">必須</span></label>
        <div class="mail-pass-box">
            <p>Eメールアドレス</p>
            <p>genuine.toa@gmail.com</p>
        </div>
    </div>

    <div class="form-pass">
        <label class="dot-icon">パスワード<span class="surely">必須</span></label>
        <div class="mail-pass-box">
            <p>***************</p>
        </div>
    </div>

    <button class="button-none form-btn form-btn-color" type="submit">送信</button>
</form>
@endsection
