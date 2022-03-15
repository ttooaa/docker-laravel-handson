{{-- お問い合わせ画面の完了項目 --}}
@extends('layouts.base')

@section('head_link')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<p class="inquiry-new-user">お問い合わせ</p>
<ol class="stepBar">
    <li class="visited"><span>1</span><br>入力</li>
    <li class="visited"><span>2</span><br>確認</li>
    <li class="visited"><span>3</span><br>完了</li>
</ol>

<section class="completion wrapper">
    <p>送信が完了しました。ご協力ありがとうございました。</p>
    <a href="{{ route('home') }}">TOPへ</a>
</section>
@endsection
