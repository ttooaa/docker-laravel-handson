{{-- ヘッダー --}}
<a href="#"><img class="header-logo" src="images/キョウのワダイ.jpeg" alt="toppage"></a>

@auth
    <div class="header-auth">
        <ul>
            <li><a href="#">参加する</a></li>
            <li><a href="#">募集する</a></li>
            <li><a href="#">ステータス</a></li>
            <li><a href="#">マイページ</a></li>
            <li><a href="#">お問い合わせ</a></li>
        </ul>
    </div>
@endauth

@guest
    <div class="header-guest">
        <ul>
            <li><a href="#">ログイン</a></li>
            <li><a href="#">新規登録</a></li>
            <li><a href="#">お問い合わせ</a></li>
        </ul>
    </div>
@endguest
