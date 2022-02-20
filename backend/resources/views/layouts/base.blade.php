{{-- サイトのベースとなる部分 --}}
<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>キョウノワダイ</title>
    <meta name="description" contents="皆さんが楽しめるワダイを提供します">
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
