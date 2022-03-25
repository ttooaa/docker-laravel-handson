{{-- 新規会員登録画面の完了項目 --}}
@extends('layouts.base')

@section('head_link')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<p class="title new-user">新規会員登録</p>

<section class="completion wrapper">
    <p>送信が完了しました。</p>
    <a href="{{ url('/') }}">TOPへ</a>
</section>
@endsection
