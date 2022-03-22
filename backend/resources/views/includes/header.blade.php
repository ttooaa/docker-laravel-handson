{{-- ヘッダー --}}
<a href="{{ url('/') }}"><img class="header-logo" src="{{ asset('images/キョウのワダイ.jpeg') }}" alt="toppage"></a>

@auth
    <ul class="header-ul">
        <li class="header-li"><a  class="header-a" href="#">参加する</a></li>
        <li class="header-li"><a  class="header-a" href="#">募集する</a></li>
        <li class="header-li"><a  class="header-a" href="#">ステータス</a></li>
        <li class="header-li"><a  class="header-a" href="{{ url('/my_page') }}">マイページ</a></li>
        <li class="header-li"><a  class="header-a" href="{{ url('/inquiry/input') }}">お問い合わせ</a></li>
    </ul>
@endauth

@guest
    <ul class="header-ul">
        <li class="header-li"><a  class="header-a" href="{{ route('login') }}">ログイン</a></li>
        @if (Route::has('register'))
        <li class="header-li"><a  class="header-a" href="{{ route('register') }}">新規登録</a></li>
        @endif
        <li class="header-li"><a  class="header-a" href="{{ url('/inquiry/input') }}">お問い合わせ</a></li>
    </ul>
@endguest
