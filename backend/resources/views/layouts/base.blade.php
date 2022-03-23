{{-- サイトのベースとなる部分 --}}
<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="description" contents="皆さんが楽しめるワダイを提供します">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>キョウのワダイ</title>

    <link rel="icon" type="image/jpg" href="{{ asset('images/キョウのワダイ_タイトル画像.jpg') }}">
    <link rel="stylesheet" href="{{ asset('css/parts.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    @yield('head_link') {{-- スタイル等は各ページで表示が違うためそのページに合ったlinkを使用する --}}

</head>

<body>
    <header id="header1" class="wrapper">
        @include('includes.header')
    </header>

    <main class="wrapper">
        @yield('content')
    </main>

    <footer id="footer1" class="wrapper">
        @include('includes.footer')
    </footer>
</body>

</html>
