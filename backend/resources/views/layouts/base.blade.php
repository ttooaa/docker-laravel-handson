{{-- サイトのベースとなる部分 --}}
<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="description" contents="皆さんが楽しめるワダイを提供します">
    <title>キョウのワダイ</title>

    @yield('head_link') {{-- スタイル等は各ページで表示が違うためそのページに合ったlinkを使用する --}}

    <link rel="icon" type="image/jpg" href="{{ asset('images/キョウのワダイ_タイトル画像.jpg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header class="wrapper">
        @include('includes.header')
    </header>

    <main class="wrapper">
        @yield('content')
    </main>

    <footer class="wrapper">
        @include('includes.footer')
    </footer>
</body>

</html>
