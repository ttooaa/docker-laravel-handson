{{-- LPを表示させる --}}
@extends('layouts.base')

@section('content')
<section class="home-top">
    <h3>Know the inside.</h3>
    <h1>新しい『出会い』は人生を楽しくする。</h1>
    <div id="cloud-box">
        <img class="cloud" src="{{ asset('images/cloud.png') }}" alt="雲">
        <img class="font fontA" src="{{ asset('images/font-A.png') }}" alt="通話から始まる恋">
        <img class="font fontB" src="{{ asset('images/font-B.png') }}" alt="していきませんか？">
    <div>
</section>

<section class="home-center">
    <div class="opacity-1">
        <img class="people people1" src="{{ asset('images/人物-B.jpg') }}" alt="女性1">
        <div class="home-parts parts1">
            <h3 class="home-parts-title">Step1　気になるグループを見つけよう</h3>
            <p>最近の投稿やキーワード検索を利用して、あなたの興味のあるお部屋に参加してみよう</p>
        </div>

        <img class="people people2" src="{{ asset('images/人物-B.jpg') }}" alt="女性1">
        <img class="people people3" src="{{ asset('images/人物-C.jpg') }}" alt="男性1">
        <img class="people people4" src="{{ asset('images/人物-D.jpg') }}" alt="女性2">
        <img class="people people5" src="{{ asset('images/人物-E.jpg') }}" alt="男性2">
        <div class="home-parts parts2">
            <h3 class="home-parts-title">Step2　テーマになったワダイについて話そう</h3>
            <p>通話中にでるお題に沿って、グループ内の仲間と楽しく会話しよう！</p>
        </div>
    </div>
</section>
@endsection
