{{-- LPを表示させる --}}
@extends('layouts.base')

@section('head_link')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<section class="home-top wrapper"> {{-- TOP画面 --}}
    <h3>Know the inside.</h3>
    <h1>新しい『出会い』は人生を楽しくする。</h1>
    <div id="cloud-box">
        <img class="cloud" src="{{ asset('images/cloud.png') }}" alt="雲">
        <img class="font fontA" src="{{ asset('images/font-A.png') }}" alt="通話から始まる恋">
        <img class="font fontB" src="{{ asset('images/font-B.png') }}" alt="していきませんか？">
    <div>
</section>

<section class="home-center wrapper"> {{-- Step1とStep2 --}}
    <div class="opacity-1">
        <img class="people people1" src="{{ asset('images/人物-B.jpg') }}" alt="女性1">
        <div class="home-parts parts1">
            <h3>Step1　気になるグループを見つけよう</h3>
            <p>最近の投稿やキーワード検索を利用して、あなたの興味のあるお部屋に参加しよう</p>
            <p>テキスト</p>
        </div>

        <img class="people people2" src="{{ asset('images/人物-B.jpg') }}" alt="女性1">
        <img class="people people3" src="{{ asset('images/人物-C.jpg') }}" alt="男性1">
        <img class="people people4" src="{{ asset('images/人物-D.jpg') }}" alt="女性2">
        <img class="people people5" src="{{ asset('images/人物-E.jpg') }}" alt="男性2">
        <div class="home-parts parts2">
            <h3>Step2　テーマになったワダイについて話そう</h3>
            <p>通話中にでるお題に沿って、グループ内の仲間と楽しく会話しよう</p>
            <p>テキスト</p>
        </div>
    </div>
</section>

<section class="home-bottom wrapper">
    <h1>Q.こんなお悩みありませんか？</h1>
    <div class="worry-box">
        <img class="worry" src="{{ asset('images/worry.png') }}" alt="悩んでる男性">
        <img class="gan gan1" src="{{ asset('images/丸-上.png') }}" alt="丸-上">
        <img class="gan gan2" src="{{ asset('images/丸-中.png') }}" alt="丸-中">
        <img class="gan gan3" src="{{ asset('images/丸-下.png') }}" alt="丸-下">
        <div class="worry-parts">
            <div class="worry-block worry-1">
                <p>恋人や友だちが欲しいけれど...</p>
                <h3>予定がなかなか合わない！</h3>
            </div>
            <div class="worry-block worry-2">
                <p>遊びに行きたいけれど...</p>
                <h3>なかなか時間が作れない！</h3>
            </div>
            <div class="worry-block worry-3">
                <p>ご時世的にも色々大変...</p>
                <h3>正直外に出歩きたくない！</h3>
            </div>
        </div>
    </div>

    <div class="worry-solution">
        <div class="solution-parts">
            <img class="home-logo" src="{{ asset('images/キョウのワダイ.jpeg') }}" alt="toppage">
            <p>は</p>
        </div>
        <p>あなたのそんな悩みを解決します！</p>
    </div>
</section>

<section class="use-container wrapper">
    <div class="use-back">
        <h1 class="title-1">①まずはスタートボタンから始めよう！</h1>

        <div class="use-box">
            <img class="use-img" src="{{ asset('images/再生ボタン.jpg') }}" alt="toppage">
            <div class="use-text">
                <p>新規会員登録か下のスタートボタンをおして、内容にそってメールアドレスとパスワードを入力して送信！</p>
            </div>
        </div>
        <h2 class="arrow">↓</h2>

        <div class="use-box">
            <img class="use-img" src="{{ asset('images/メール送信.jpg') }}" alt="toppage">
            <div class="use-text">
                <p>ご自身のメールボックスに kyonowadai@gmail.com からのメール内の本登録アドレスにアクセスして登録完了！</p>
            </div>
        </div>
        <h2 class="arrow">↓</h2>

        <div class="use-box">
            <img class="use-img" src="{{ asset('images/素材-A.png') }}" alt="toppage">
            <div class="use-text">
                <p>そのあと自己紹介を作成して早速グループ通話へ参加しよう！</p>
            </div>
        </div>

        <h1 class="title-2">②でてきたワダイについて話そう！</h1>

        <div class="use-box">
            <img class="use-img" src="{{ asset('images/人物-F.jpg') }}" alt="toppage">
            <div class="use-text">
                <p>表示されたワダイについて楽しくお話しよう！キョウのワダイは初めての人とでも気軽にお話できます！</p>
            </div>
        </div>

        <h1 class="title-2">③気に入った相手を友だち追加しよう！</h1>

        <div class="use-box">
            <img class="use-img" src="{{ asset('images/人物-G.jpg') }}" alt="toppage">
            <div class="use-text">
                <p>追加したお友達とメッセージでやりとりして仲良くなろう！</p>
            </div>
        </div>

        <h1 class="title-3">さっそく始めてみよう！</h1>
        <a class="start-btn" href="#">スタート</a>
    </div>
</section>
@endsection
