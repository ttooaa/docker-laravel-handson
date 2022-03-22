{{-- ヘッダー --}}
<a href="{{ url('/') }}"><img class="header-logo" src="{{ asset('images/キョウのワダイ.jpeg') }}" alt="toppage"></a>

@auth
    <ul>
        <li><a href="#">参加する</a></li>
        <li><a href="#">募集する</a></li>
        <li><a href="#">ステータス</a></li>
        <li><a href="{{ url('/my_page') }}">マイページ</a></li>
        <li><a href="{{ url('/inquiry/input') }}">お問い合わせ</a></li>
    </ul>
@endauth

@guest
    <ul>
        <li><a href="{{ route('login') }}">ログイン</a></li>
        @if (Route::has('register'))
            <li><a href="{{ route('register') }}">新規登録</a></li>
        @endif
        <li><a href="{{ url('/inquiry/input') }}">お問い合わせ</a></li>
    </ul>
@endguest
