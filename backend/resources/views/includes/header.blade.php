{{-- ヘッダー --}}
<a href="{{ url('/') }}"><img class="header-logo" src="{{ asset('images/キョウのワダイ.jpeg') }}" alt="toppage"></a>

@auth
    <ul class="header-ul">
        <li><a  class="nav-link text-dark" href="{{ url('/join') }}">参加する</a></li>
        <li><a  class="nav-link text-dark" href="{{ url('/collect') }}">募集する</a></li>
        <li><a  class="nav-link text-dark" href="#">ステータス</a></li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}さん
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a  class="dropdown-item" href="{{ url('/my_page') }}">プロフィール編集</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('ログアウト') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        <li><a  class="nav-link text-dark" href="{{ url('/inquiry/input') }}">お問い合わせ</a></li>
    </ul>
@endauth

@guest
    <ul class="header-ul">
        <li><a  class="nav-link text-dark" href="{{ route('login') }}">ログイン</a></li>
        @if (Route::has('register'))
        <li><a  class="nav-link text-dark" href="{{ route('register') }}">新規登録</a></li>
        @endif
        <li><a  class="nav-link text-dark" href="{{ url('/inquiry/input') }}">お問い合わせ</a></li>
    </ul>
@endguest
