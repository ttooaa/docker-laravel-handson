{{-- 募集画面の表示 --}}
@extends('layouts.base')
@section('title','キョウのワダイ-募集ページ')

@section('head_link')
@endsection

@section('content')
<section id="back"style="height: 1600px;">
    <div class="formScr">
        <div  class="formSize">
            <h1 class="formTitle">募集内容を入力してください</h1>

            <form method="POST" action="" enctype="multipart/form-data">

                <div class="form-head formPb">
                    <label class="label-head labelWidth">タイトル<span class="surely">必須</span></label>
                    <div class="input-head">
                        <input class="formTextTitle" type="text" name="title" placeholder="最大20文字まで">
                    </div>
                </div>

                <div class="form-mail mt-3">
                    <label class="label-head labelWidth">ジャンル<span class="surely">必須</span></label>
                    <div class="input-head">
                        <select class="formTextTitle" name="genre" id="">
                            <option value="1">誰でも可</option>
                        </select>
                    </div>
                </div>

                <div class="form-mail mt-3">
                    <label class="label-head">趣味</label>
                    <div class="input-head">
                        <input class="formText" type="text" name="hoby" placeholder="映画、釣り、旅行、etc.">
                    </div>
                </div>

                <div class="form-textarea">
                    <label class="mb-3">自己紹介文</label>
                    <div class="textarea-box">
                        <textarea name="inquiry" maxlength="150" style=height:200px; placeholder="例）お話するのが大好きです。気軽に話せて友達が作りたいと思って始めてみました。どうぞよろしくおねがいします！"></textarea>
                    </div>
                </div>

                <button class="button-none start-btn formBtn" type="submit">完了</button>
            </form>
        </div>
        </div>
</section>

@endsection
