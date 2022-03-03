{{-- お問い合わせ画面の入力項目 --}}
@extends('layouts.base')

@section('content')
<p class="inquiry-new-user">お問い合わせ</p>
<ol class="stepBar">
    <li class="visited"><span>1</span><br>入力</li>
    <li><span>2</span><br>確認</li>
    <li><span>3</span><br>完了</li>
</ol>

<form class="inquiry-1" method="POST" action="">
    <div class="form-sex">
        <label class="label-sex dot-icon">性別<span class="surely">必須</span></label>
        <div class="input-sex">
            <input id="man" type="radio" name="sex" value="man"><label for="man">男性</label>
            <input id="woman" type="radio" name="sex" value="woman"><label for="woman">女性</label>
            <input id="none" type="radio" name="sex" value="none"><label for="none">選択しない</label>
        </div>
    </div>

    <div class="form-mail">
        <label class="dot-icon">返信用メールアドレス<span class="surely">必須</span></label>
        <div class="mail-pass-box">
            <p>Eメールアドレス</p>
            <input type="email" name="email" >
        </div>
    </div>

    <div class="form-textarea">
        <label class="dot-icon">お問い合わせ内容<span class="optional">任意</span></label>
        <div class="textarea-box">
            <textarea name="inquiry" maxlength="600" placeholder="お問い合わせ内容をご記入ください"></textarea>
        </div>
    </div>

    <button class="button-none form-btn" type="submit">確認へ</button>
</form>
@endsection
