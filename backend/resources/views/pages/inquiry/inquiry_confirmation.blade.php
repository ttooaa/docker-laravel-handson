{{-- お問い合わせ画面の確認項目 --}}
@extends('layouts.base')

@section('content')
<p class="inquiry-new-user">お問い合わせ</p>
<ol class="stepBar">
    <li class="visited"><span>1</span><br>入力</li>
    <li class="visited"><span>2</span><br>確認</li>
    <li><span>3</span><br>完了</li>
</ol>

<form class="inquery-2" action="">
    <div class="form-item-sex">
        <label class="label-sex dot-icon">性別</label>
        <p>：男性</p>
    </div>

    <div class="form-item-email">
        <label class="dot-icon">返信用メールアドレス</label>
        <div class="email-box">
            <p>メールアドレス</p>
            <p>genuine.toa@gmail.com</p>
        </div>
    </div>

    <div class="form-item-textarea">
        <label class="dot-icon">お問い合わせ内容</label>
        <div class="textarea-box">
            <textarea name="inquery" maxlength="600" readonly></textarea>
        </div>
    </div>
    <a class="inquery-btn" href="#">送信</a>
</form>
@endsection
