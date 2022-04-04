{{-- 新規会員登録画面の完了項目 --}}
@extends('layouts.base')
@section('title','キョウのワダイ-新規会員登録')

@section('head_link')
@endsection

@section('content')
<p class="title new-user">新規会員登録</p>

<section class="completion wrapper">
    <p>メールの送信と仮登録が完了しました。</p>
    <p>メールに記載のURLを開いていただくと本機能をお使いいただけます。</p>
    <a href="{{ url('/') }}">TOPへ</a>
</section>
@endsection
