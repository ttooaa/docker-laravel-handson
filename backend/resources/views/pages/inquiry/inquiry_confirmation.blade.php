{{-- お問い合わせ画面の確認項目 --}}
@extends('layouts.base')

@section('content')
<p class="lead-form">ご予約はこちらから！</p>

<form class="otehon">

  <div class="item">
    <label class="label">お名前</label>
    <input class="inputs" type="text" name="name">
  </div>

  <div class="item">
    <label class="label">メールアドレス</label>
    <input class="inputs" type="email" name="email">
  </div>

  <div class="item">
    <p class="label">予約メニュー</p>
    <div class="inputs">
    <input id="cut" type="radio" name="menu" value="cut"><label for="cut">カット</label>
    <input id="cut-color" type="radio" name="menu" value="cut-color"><label for="cut-color">カット+カラー</label>
    <input id="headspa" type="radio" name="menu" value="headspa"><label for="headspa">ヘッドスパ</label>
    </div>
  </div>

  <div class="item">
    <label class="label">ご意見</label>
    <textarea class="inputs"></textarea>
  </div>

  <div class="btn-area">
    <input type="submit" value="予約する"><input type="reset" value="リセット">
  </div>

</form>
@endsection
