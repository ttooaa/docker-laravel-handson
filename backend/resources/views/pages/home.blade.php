{{-- LPを表示させる --}}
@extends('layouts.base')

@section('content')
<div class="home-top">
    <h3>Know the inside.</h3>
    <h1>新しい『出会い』は人生を楽しくする。</h1>
    <div id="cloud-box">
        <img class="cloud" src="{{ asset('images/cloud.png') }}" alt="雲">
        <img class="font fontA" src="{{ asset('images/font-A.png') }}" alt="通話から始まる恋">
        <img class="font fontB" src="{{ asset('images/font-B.png') }}" alt="していきませんか？">
    <div>
</div>
@endsection
