{{-- 参加画面の表示 --}}
@extends('layouts.base')
@section('title','キョウのワダイ-参加一覧')

@section('head_link')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('content')
<section id="back">
    <div class="container">
        <div class="row my-4 px-4 align-items-center">
            <div class="col-3">
                <h1 class="bg-primary">最近の投稿</h1>
            </div>
            <div class="col-3 offset-3">
                キーワード検索
            </div>
            <div class="col-3">
                絞り込み
            </div>
        </div>
    </div>
</section>
@endsection
