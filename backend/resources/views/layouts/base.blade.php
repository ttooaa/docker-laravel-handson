{{-- サイトのベースとなる部分 --}}
<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="description" contents="皆さんが楽しめるワダイを提供します">
    <title>キョウのワダイ</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/jpg" href="{{ asset('images/キョウのワダイ_タイトル画像.jpg') }}">
</head>

<body>
    <header>
        @include('includes.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</body>

</html>
