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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
