{{-- お問い合わせ画面の確認項目 --}}
@extends('layouts.base')

@section('content')
<p class="inquiry-new-user">お問い合わせ</p>
<ol class="stepBar">
    <li class="visited"><span>1</span><br>入力</li>
    <li class="visited"><span>2</span><br>確認</li>
    <li><span>3</span><br>完了</li>
</ol>

<form class="inquiry-2" method="POST" action="">
    <div class="form-sex">
        <label class="label-sex dot-icon">性別</label>
        <p>：男性</p>
    </div>

    <div class="form-mail">
        <label class="dot-icon">返信用メールアドレス</label>
        <div class="mail-pass-box">
            <p>Eメールアドレス</p>
            <p>genuine.toa@gmail.com</p>
        </div>
    </div>

    <div class="form-textarea">
        <label class="dot-icon">お問い合わせ内容</label>
        <div class="textarea-box">
            <textarea name="inquiry" maxlength="600" readonly></textarea>
        </div>
    </div>

    <button class="button-none form-btn" type="submit">送信</button>
</form>
@endsection
