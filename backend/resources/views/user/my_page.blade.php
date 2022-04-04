{{-- マイページの表示 --}}
@extends('layouts.base')
@section('title','キョウのワダイ-マイページ')

@section('head_link')
@endsection

@section('content')
{{-- <section id="back" style="height:1150px;""> --}}
<section id="back">
    <div class="formScr">
        <div  class="formSize">
            <h1 class="formTitle">まずは簡単な自己紹介を作成しよう</h1>

            <form method="POST" action="" enctype="multipart/form-data">

                {{-- ここに画像登録用のフォームを挿入する --}}
                <div class="form-sex formPb">
                    <div class="formImg">
                        {{-- <input type="file" class="form-controll-file" id="avatar" name="avatar" accept="image/png, image/jpeg"> --}}
                        <label for="file" class="filelabel">ファイルを添付</label>
                        <input type="file" name="fileinput" id="file" class="fileinput" onchange="previewFile(this);">

                        <img class="avatar" id="preview">
                    </div>
                </div>

                <div class="form-sex formPb formMt">
                    <label class="label-sex">性別<span class="surely">必須</span></label>
                    <div class="input-sex formMl">
                        <input id="man" type="radio" name="sex" value="man" style="transform:scale(1.5);"><label for="man">男性</label>
                        <input id="woman" type="radio" name="sex" value="woman" style="transform:scale(1.5);"><label for="woman">女性</label>
                        <input id="none" type="radio" name="sex" value="none" style="transform:scale(1.5);"><label for="none">選択しない</label>
                    </div>
                </div>

                <div class="form-mail mt-3">
                    <label class="label-sex">出身地<span class="surely">必須</span></label>
                    <div class="input-sex">
                        <select name="prefecture" id="">
                            <option value="1">北海道</option>
                        </select>
                    </div>
                </div>

                <div class="form-mail mt-3">
                    <label class="label-sex">趣味</label>
                    <div class="input-sex">
                        <input class="formText" type="text" name="hoby" placeholder="映画、釣り、旅行、etc.">
                    </div>
                </div>

                <div class="form-textarea">
                    <label class="mb-3">自己紹介文</label>
                    <div class="textarea-box">
                        <textarea name="inquiry" maxlength="400" style=height:200px; placeholder="例）お話するのが大好きです。気軽に話せて友達が作りたいと思って始めてみました。どうぞよろしくおねがいします！"></textarea>
                    </div>
                </div>

                <button class="button-none start-btn formBtn" type="submit">完了</button>
            </form>
        </div>
        </div>
</section>

<script>
    function previewFile(Img){
      var fileData = new FileReader();
      fileData.onload = (function() {
        //id属性が付与されているimgタグのsrc属性に、fileReaderで取得した値の結果を入力することで
        //プレビュー表示している
        document.getElementById('preview').src = fileData.result;
      });
      fileData.readAsDataURL(Img.files[0]);
    }
</script>
@endsection
