{{-- ヘッダー --}}
<a href="{{ url('/') }}"><img class="header-logo" src="{{ asset('images/キョウのワダイ.jpeg') }}" alt="toppage"></a>

@auth
    <ul class="header-ul">
        <li class="header-li"><a  class="header-a" href="#">参加する</a></li>
        <li class="header-li"><a  class="header-a" href="#">募集する</a></li>
        <li class="header-li"><a  class="header-a" href="#">ステータス</a></li>
        <li class="header-li"><a  class="header-a" href="{{ url('/my_page') }}">マイページ</a></li>
        {{-- <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li> --}}
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
