{{-- 参加画面の表示 --}}
@extends('layouts.base')
@section('title','キョウのワダイ-参加一覧')

@section('head_link')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('content')
<section id="back">
    <div class="container">
        {{-- 項目部分 --}}
        <div class="row mt-3 pb-4 align-items-center noto border-bottom border-dark border-3">
            <div class="col-lg-3">
                <h1 class="text-center condition">最近の投稿</h1>
            </div>
            <div class="offset-3 col-lg-3">
                <div class="input-group px-2">
                    <input type="text" class="form-control" placeholder="キーワード入力" aria-label="キーワード入力" aria-describedby="button-addon2">
                    <button type="button" id="button-addon2" class="btn btn-primary">検索</button>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group px-2">
                    <select class="form-select" id="inputGroupSelect02">
                      <option selected>最近の投稿</option>
                      <option value="1">フォロワー</option>
                      <option value="2">まもなく開始</option>
                      <option value="3">参加人数が多い順</option>
                      <option value="4">2：2　(男2：女2)</option>
                      <option value="5">1：1　(男1：女1)</option>
                      <option value="6">自由枠</option>
                    </select>
                    <label for="inputGroupSelect02" class="input-group-text">絞り込み</label>
                  </div>
            </div>
        </div>

        <div class="col-lg-12 mt-4 mx-auto p-4 noto postBack">
            <div class="d-flex flex-row">
                <h2 class="m-0">誰でも可</h2> {{-- 分類 --}}
                <h2 class="m-0">｜</h2> {{-- 空間 --}}
                <h2 class="m-0">気軽にお話しましょう！</h2> {{-- title部分 --}}
            </div>
            <div class="row mt-3" style="height: 96px;">
                <div class="col-lg-6 align-self-center"> {{-- 写真表示 --}}
                    <div class="row">
                        <img class="col-lg-3 avatar" src="{{ asset('images/丸-中.png') }}" alt="host">
                        <h2 class="col-lg-3 m-0">画像</h2>
                        <h2 class="col-lg-3 m-0">画像</h2>
                        <h2 class="col-lg-3 m-0">画像</h2>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center"> {{-- 詳細分 150文字以内 --}}
                    <p class="m-0">１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６</p>
                </div>
            </div>
            <div class="row align-item-center mt-3">
                <div class="col-lg-3"> {{-- 詳細分 --}}
                    <h5 class="m-0">はじめまして！</h5>
                </div>
                <div class="col-lg-3"> {{-- 詳細分 --}}
                    <h5 class="m-0">はじめまして！</h5>
                </div>
                <div class="col-lg-3"> {{-- 詳細分 --}}
                    <h5 class="m-0">はじめまして！</h5>
                </div>
                <div class="col-lg-3 text-end"> {{-- 詳細分 --}}
                    <h5 class="m-0">はじめまして！</h5>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
