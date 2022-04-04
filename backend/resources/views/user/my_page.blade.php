{{-- マイページの表示 --}}
@extends('layouts.base')
@section('title','キョウのワダイ-マイページ')

@section('head_link')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<section id="back">
    <div class="formScr">
        <div  class="formSize">
            <h1 class="formTitle">まずは簡単な自己紹介を作成しよう</h1>

            <form method="POST" action="">

                {{-- ここに画像登録用のフォームを挿入する --}}

                <div class="form-sex">
                    <label class="label-sex ">性別<span class="surely">必須</span></label>
                    <div class="input-sex">
                        <input id="man" type="radio" name="sex" value="man"><label for="man">男性</label>
                        <input id="woman" type="radio" name="sex" value="woman"><label for="woman">女性</label>
                        <input id="none" type="radio" name="sex" value="none"><label for="none">選択しない</label>
                    </div>
                </div>

                <div class="form-mail">
                    <label class="">出身地</label>
                    <div class="mail-pass-box">
                        <p>Eメールアドレス</p>
                        <input type="email" name="email" >
                    </div>
                </div>

                <div class="form-textarea">
                    <label class="">自己紹介文</label>
                    <div class="textarea-box">
                        <textarea name="inquiry" maxlength="600" placeholder="例）お話するのが大好きです。気軽に話せて友達が作りたいと思って始めてみました。どうぞよろしくおねがいします！"></textarea>
                    </div>
                </div>

                <button class="button-none form-btn" type="submit">確認へ</button>
            </form>
        </div>
        </div>
</section>

@endsection
