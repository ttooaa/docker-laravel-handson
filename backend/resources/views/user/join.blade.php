{{-- 参加画面の表示 --}}
@extends('layouts.base')
@section('title','キョウのワダイ-参加一覧')

@section('head_link')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('content')
<section id="back">
    <div class="container">
        <div class="row my-4 align-items-center">
            <div class="col-lg-4">
                <h1>最近の投稿</h1>
            </div>
            <div class="col-lg-4">
                <h1>最近の投稿</h1>
            </div>
            <div class="col-lg-4">
                <h1>最近の投稿</h1>
            </div>
        </div>
    </div>
</section>
@endsection
