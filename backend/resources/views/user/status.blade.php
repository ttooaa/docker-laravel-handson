{{-- 現在の参加・募集状況、参加・募集予定など --}}
@extends('layouts.base')
@section('title','キョウのワダイ-参加一覧')

@section('head_link')
@endsection

@section('content')
<section id="back">
    <div class="container pb-4 border-bottom border-dark border-3">
        {{-- 項目部分 --}}
        <div class="row mt-3 pb-4 align-items-center noto border-bottom border-dark border-3">
            <div class="col-xl-7 col-lg-8">
                <h1 class="text-center condition">現在の参加 or 募集ステータス</h1>
            </div>
        </div>

        {{-- 募集車の場合 --}}
        <div class="col-lg-12 mt-4 mx-auto p-4 noto postBack postCollect">
            <div class="d-flex flex-row">
                <h2 class="m-0">誰でも可</h2> {{-- 分類 --}}
                <h2 class="m-0">｜</h2> {{-- 空間 --}}
                <h2 class="m-0">気軽にお話しましょう！</h2> {{-- title部分 --}}
            </div>
            <div class="row mt-3">
                <div class="col-xl-6 col-md-8 align-self-center"> {{-- 写真表示 --}}
                    <div class="row">
                        <img class="col-lg-3 p-0 ms-3 avatar" src="{{ asset('images/人物-A.jpg') }}" alt="host">
                        <img class="col-lg-3 p-0 ms-2 avatar" src="{{ asset('images/人物-A.jpg') }}" alt="host">
                        <img class="col-lg-3 p-0 ms-2 avatar" src="{{ asset('images/人物-A.jpg') }}" alt="host">
                        <img class="col-lg-3 p-0 ms-2 avatar" src="{{ asset('images/人物-A.jpg') }}" alt="host">
                    </div>
                </div>
                <div class="col-xl-6 col-md-4 align-self-center text-center"> {{-- 詳細分 150文字以内 --}}
                    <h4 class="my-3 fw-bold">開始時間　21:30</h4>
                    <h4 class="my-3 fw-bold">終了時間　22:00</h4>
                </div>
            </div>
            <div class="row align-item-center mt-3">
                <div class="col-6 text-center"> {{-- 詳細分 --}}
                    <h5 class="m-0 fw-bold">参加可能人数：あと3人</h5>
                </div>
                <div class="col-6 text-center"> {{-- 詳細分 --}}
                    <h5 class="m-0 fw-bold">あなたは募集者です</h5>
                </div>
            </div>
        </div>

        {{-- 参加者の場合 --}}
        <div class="col-lg-12 mt-4 mx-auto p-4 noto postBack">
            <div class="d-flex flex-row">
                <h2 class="m-0">誰でも可</h2> {{-- 分類 --}}
                <h2 class="m-0">｜</h2> {{-- 空間 --}}
                <h2 class="m-0">気軽にお話しましょう！</h2> {{-- title部分 --}}
            </div>
            <div class="row mt-3">
                <div class="col-xl-6 col-md-8 align-self-center"> {{-- 写真表示 --}}
                    <div class="row">
                        <img class="col-lg-3 p-0 ms-3 avatar" src="{{ asset('images/人物-A.jpg') }}" alt="host">
                        <img class="col-lg-3 p-0 ms-2 avatar" src="{{ asset('images/人物-A.jpg') }}" alt="host">
                        <img class="col-lg-3 p-0 ms-2 avatar" src="{{ asset('images/人物-A.jpg') }}" alt="host">
                        <img class="col-lg-3 p-0 ms-2 avatar" src="{{ asset('images/人物-A.jpg') }}" alt="host">
                    </div>
                </div>
                <div class="col-xl-6 col-md-4 align-self-center text-center"> {{-- 詳細分 150文字以内 --}}
                    <h4 class="my-3 fw-bold">開始時間　21:30</h4>
                    <h4 class="my-3 fw-bold">終了時間　22:00</h4>
                </div>
            </div>
            <div class="row align-item-center mt-3">
                <div class="col-6 text-center"> {{-- 詳細分 --}}
                    <h5 class="m-0 fw-bold">参加可能人数：あと3人</h5>
                </div>
                <div class="col-6 text-center"> {{-- 詳細分 --}}
                    <h5 class="m-0 fw-bold">あなたは参加者です</h5>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
