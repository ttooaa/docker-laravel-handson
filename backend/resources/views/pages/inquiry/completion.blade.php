{{-- お問い合わせ画面の完了項目 --}}
@extends('layouts.base')

@section('head_link')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<p class="inquiry-new-user">お問い合わせ</p>

<section class="completion wrapper">
    <p>送信が完了しました。ご協力ありがとうございました。</p>
    <a href="{{ url('/') }}}">TOPへ</a>
</section>
@endsection
