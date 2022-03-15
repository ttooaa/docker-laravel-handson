{{-- サイトのベースとなる部分 --}}
<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="description" contents="皆さんが楽しめるワダイを提供します">
    <title>キョウのワダイ</title>
    <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
    <link rel="icon" type="image/jpg" href="{{ asset('images/キョウのワダイ_タイトル画像.jpg') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <header id="login1" class="wrapper">
        <a href="#"><img class="header-logo" src="{{ asset('images/キョウのワダイ.jpeg') }}" alt="toppage"></a>

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
    </header>

    <main class="wrapper">
        <div class="opacity-1">
            <div class="login-wrap">
                <div class="login-html">
                    <form method="POST">
                        @csrf

                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">{{ __('Login') }}</label>
                        <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">{{ __('Forgot Your Password?') }}</label>
                        <div class="login-form">
                            <div class="sign-in-htm">
                                <div class="group">
                                    <label for="email" class="label">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="input">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">{{ __('Password') }}</label>
                                    <input id="pass" type="password" class="input" data-type="password">
                                </div>

                                <div class="col-md-7 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="group martop">
                                    <input type="submit" class="button" value={{ __('Login') }} formaction="{{ route('login') }}">
                                </div>
                                <div class="hr"></div>
                            </div>
                            <div class="for-pwd-htm">
                                <div class="group">
                                    <label for="user" class="label">{{ __('Email Address') }}</label>
                                    <input id="user" type="text" class="input">
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value={{ __('Send Password Reset Link') }} formaction="{{ route('password.email') }}">
                                </div>
                                <div class="hr"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="wrapper">
        @include('includes.footer')
    </footer>
</body>

</html>

