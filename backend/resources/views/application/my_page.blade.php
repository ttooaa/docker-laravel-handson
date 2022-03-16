{{-- マイページの表示 --}}
@extends('layouts.base')

@section('head_link')
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="box">
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            ログアウト
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>
@endsection
