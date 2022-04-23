{{-- プロフィールの編集 --}}
@extends('layouts.base')
@section('title','キョウのワダイ-マイページ')

@section('head_link')
@endsection

@section('position-4', 'linkPosition')

@section('content')
{{-- <section id="back" style="height:1150px;""> --}}
<section id="back">
    <div class="formScr">
        <div  class="formSize">
            @empty ($user->sex)
                <h1 class="formTitle">まずは簡単な自己紹介を作成しよう</h1>
            @else
                <h1 class="formTitle">自己紹介の編集</h1>
            @endempty
            <form action="{{ route('user.update', Auth::id()) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                
                <div class="formImg row mx-0">
                    <div class="col-6 d-flex justify-content-center">
                        @if ($user->image_url)
                            <img src="{{ $user->image_url }}" class="fileAvatar" id="preview">
                        @else
                            <img class="fileAvatar" id="preview">
                        @endif
                    </div>
                    <div class="col-6">
                        <label for="file" class="fileLabel">ファイルを添付</label>
                        <input type="file" name="file" id="file" class="fileInput" accept="image/png, image/jpeg" onchange="previewFile(this);">
                        <p class="fileCaution mb-0">※画像は横長だとしても中央を基準に正方形に切り取られます。</p>
                        <p class="fileCaution m-0">※画像サイズは1MB以下で指定してください。</p>
                    </div>
                </div>

                <div class="form-head formPb formMt">
                    <label class="label-head">性別<span class="surely">必須</span></label>
                    <div class="input-head formMl">
                        @empty ($user->sex)
                            <input id="man" type="radio" name="sex" value="man" style="transform:scale(1.5);"><label for="man" required>男性</label>
                            <input id="woman" type="radio" name="sex" value="woman" style="transform:scale(1.5);"><label for="woman">女性</label>
                            <input id="none" type="radio" name="sex" value="none" style="transform:scale(1.5);"><label for="none">選択しない</label>
                        @else
                            @if ($user->sex == 'man')
                                <input id="man" type="radio" name="sex" value="man" style="transform:scale(1.5);" checked><label for="man" required>男性</label>
                                <input id="woman" type="radio" name="sex" value="woman" style="transform:scale(1.5);"><label for="woman">女性</label>
                                <input id="none" type="radio" name="sex" value="none" style="transform:scale(1.5);"><label for="none">選択しない</label>
                            @elseif ($user->sex == 'woman')
                                <input id="man" type="radio" name="sex" value="man" style="transform:scale(1.5);"><label for="man" required>男性</label>
                                <input id="woman" type="radio" name="sex" value="woman" style="transform:scale(1.5);" checked><label for="woman">女性</label>
                                <input id="none" type="radio" name="sex" value="none" style="transform:scale(1.5);"><label for="none">選択しない</label>
                            @else
                                <input id="man" type="radio" name="sex" value="man" style="transform:scale(1.5);"><label for="man" required>男性</label>
                                <input id="woman" type="radio" name="sex" value="woman" style="transform:scale(1.5);"><label for="woman">女性</label>
                                <input id="none" type="radio" name="sex" value="none" style="transform:scale(1.5);" checked><label for="none">選択しない</label>
                            @endif
                        @endempty
                    </div>
                </div>

                <div class="form-mail mt-3">
                    <label class="label-head">年齢<span class="surely">必須　</span></label>
                    <div class="input-head">
                        <select name="age">
                            @foreach ($ages as $age)
                                @if ($user->age == $age)
                                    <option value="{{ $age }}" selected>
                                        {{ $age }}歳
                                    </option>
                                @else
                                    <option value="{{ $age }}">
                                        {{ $age }}歳
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-mail mt-3">
                    <label class="label-head">出身地<span class="surely">必須</span></label>
                    <div class="input-head">
                        <select name="prefecture_id">
                            @foreach ($prefectures as $prefecture)
                                @if ($user->prefecture_id == $prefecture->id)
                                    <option value="{{ $prefecture->id }}" selected>
                                        {{ $prefecture->prefecture_name }}
                                    </option>
                                @else
                                    <option value="{{ $prefecture->id }}">
                                        {{ $prefecture->prefecture_name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-mail mt-3">
                    <label class="label-head my-1">趣味</label>
                    <div class="input-head">
                        @empty ($user->hobby)
                            <input class="formText" type="text" name="hobby" placeholder="映画、釣り、旅行、etc.">
                        @else
                            <input class="formText" type="text" name="hobby" placeholder="映画、釣り、旅行、etc." value="{{ $user->hobby }}">
                        @endempty
                    </div>
                </div>

                <div class="form-textarea">
                    <label class="mb-3">自己紹介文</label>
                    <div class="textarea-box">
                        @empty ($user->profile)
                            <textarea name="profile" maxlength="400" style=height:200px; placeholder="例）お話するのが大好きです。気軽に話せる友達が作りたいと思って始めてみました。どうぞよろしくおねがいします！"></textarea>
                        @else
                            <textarea name="profile" maxlength="400" style=height:200px; placeholder="例）お話するのが大好きです。気軽に話せる友達が作りたいと思って始めてみました。どうぞよろしくおねがいします！">{{ $user->profile }}</textarea>
                        @endempty
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
