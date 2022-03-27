{{-- ログインページ --}}
@extends('layouts.base')
@section('title','キョウのワダイ-ログイン')

@section('head_link')
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <div id="body">
        <div class="opacity-veri">
            <div class="login-wrap-veri">
                <div class="login-html-veri">
                    <div class="title-veri h5">{{ __('メールアドレスをご確認ください') }}</div>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('ご登録いただいたメールアドレスに確認用のリンクをお送りしました。') }}
                        </div>
                    @endif

                    {{ __('メールをご確認ください。') }}
                    {{ __('もし確認用メールが送信されていない場合は、下記をクリックしてください。') }}
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('確認メールを再送信する') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
