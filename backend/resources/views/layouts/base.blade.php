{{-- サイトのベースとなる部分 --}}
<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="description" contents="皆さんが楽しめるワダイを提供します">
    <title>キョウノワダイ</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        @include('includes.header')
    </header>

    <main>
        @yield('content')
        @yield('user_index')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</body>

</html>
