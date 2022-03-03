{{-- 新規会員登録画面の完了項目 --}}
@extends('layouts.base')

@section('content')
<p class="inquiry-new-user">新規会員登録</p>
<ol class="stepBar stepBer-color">
    <li class="visited-color"><span>1</span><br>入力</li>
    <li class="visited-color"><span>2</span><br>確認</li>
    <li class="visited-color"><span>3</span><br>完了</li>
</ol>

<section class="completion wrapper">
    <p>送信が完了しました。</p>
    <a href="{{ route('home') }}">TOPへ</a>
</section>
@endsection
