{{-- 募集画面の表示 --}}
@extends('layouts.base')
@section('title','キョウのワダイ-募集ページ')

@section('head_link')
@endsection

@section('position-2', 'linkPosition')

@section('content')
<section id="back">
    <div class="formScr">
        <div  class="formSize">
            <h1 class="formTitle">募集内容を入力してください</h1>

            <form action="{{ route('collected') }}" method="POST" enctype="multipart/form-data">
            @csrf

                <div class="form-head formPb">
                    <label class="label-head labelWidth my-1">タイトル<span class="surely">必須</span></label>
                    <input class="formTextTitle" type="text" name="title" placeholder="最大20文字まで">
                </div>

                <div class="form-mail mt-3">
                    <label class="label-head labelWidth">ジャンル<span class="surely">必須</span></label>
                    <div class="input-head">
                        <select class="formTextTitle" style="width: 300px;" name="genre" id="">
                            <option value="1">誰でも可</option>
                        </select>
                    </div>
                </div>

                <div class="form-mail mt-3">
                    <label>時間指定<span class="surely">必須</span></label>
                    <p class="timeCaution">※開始時間で選択した時間が経過後、開催時間が開始されます。</p>
                    <div class="timeBox">
                        <label for="startTime" class="label-head">開始時間</label>
                        <div class="input-head">
                            <select id="startTime" class="formTextTitle" style="width: 230px;" name="genre" id="">
                                <option value="0">すぐ開始</option>
                                <option value="5">5分後</option>
                                <option value="10">10分後</option>
                                <option value="15">15分後</option>
                                <option value="20">20分後</option>
                                <option value="25">25分後</option>
                                <option value="30">30分後</option>
                                <option value="35">35分後</option>
                                <option value="40">40分後</option>
                                <option value="45">45分後</option>
                                <option value="50">50分後</option>
                                <option value="55">55分後</option>
                                <option value="60">1時間後</option>
                                <option value="75">1時間15分後</option>
                                <option value="90">1時間30分後</option>
                                <option value="105">1時間45分後</option>
                                <option value="120">2時間後</option>
                            </select>
                        </div>
                        <label for="runTime" class="label-head mt-5">開催時間</label>
                        <div class="input-head">
                            <select id="runTime" class="formTextTitle mt-5" style="width: 230px;" name="genre" id="">
                                <option value="15">10分</option>
                                <option value="15">15分</option>
                                <option value="30">30分</option>
                                <option value="45">45分</option>
                                <option value="60">1時間</option>
                                <option value="75">1時間15分</option>
                                <option value="90">1時間30分</option>
                                <option value="105">1時間45分</option>
                                <option value="120">2時間</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-textarea">
                    <label class="mb-3">詳細<span class="optional" style="color: #888686;">任意</span></label>
                    <p class="timeCaution">※最大150文字まで</p>
                    <div class="textarea-box">
                        <textarea name="inquiry" maxlength="150" style=height:200px; placeholder="例）最近はじめました。たかって言いますよろしくです！僕は話すのが苦手ですが話題があると話しやすいな〜って感じるんですよね！気軽にお話しましょう！"></textarea>
                    </div>
                </div>

                <button class="button-none start-btn formBtn" type="submit">完了</button>
            </form>
        </div>
        </div>
</section>

@endsection
