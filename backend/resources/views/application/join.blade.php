{{-- 参加画面の表示 --}}
@extends('layouts.base')
@section('title','キョウのワダイ-参加一覧')

@section('position-1', 'linkPosition')

@section('head_link')
@endsection

@section('content')
<section id="back">
    <div class="container pb-4 border-bottom border-dark border-3">
        {{-- 項目部分 --}}
        <div class="row mt-5 pb-4 align-items-center noto border-bottom border-dark border-3">
            <div class="col-xl-3 col-lg-4">
                <h1 class="text-center condition">最近の投稿</h1>
            </div>
            <div class="offset-xl-3 col-xl-3 col-lg-4 col-md-6">
                <div class="input-group px-2">
                    <input type="text" class="form-control" placeholder="キーワード入力" aria-label="キーワード入力" aria-describedby="button-addon2">
                    <button type="button" id="button-addon2" class="btn btn-primary">検索</button>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="input-group px-2">
                    <select class="form-select" id="inputGroupSelect02">
                      <option selected>最近の投稿</option>
                      <option value="1">フォロワー</option>
                      <option value="2">まもなく開始</option>
                      <option value="3">参加人数が多い順</option>
                      <option value="4">2：2　(男2：女2)</option>
                      <option value="5">1：1　(男1：女1)</option>
                      <option value="6">自由枠</option>
                    </select>
                    <label for="inputGroupSelect02" class="input-group-text">絞り込み</label>
                </div>
            </div>
        </div>

        @foreach ($rooms as $room)
            <div class="col-lg-12 mt-4 mx-auto p-4 noto postBack">
                <div class="d-flex flex-row">
                    <h2 class="m-0">{{ $room->genre }}</h2> {{-- 分類 --}}
                    <h2 class="m-0">｜</h2> {{-- 空間 --}}
                    <h2 class="m-0">{{ $room->title }}</h2> {{-- title部分 --}}
                </div>

                <div class="row mt-3">
                    <div class="col-xl-6 col-md-8 align-self-center"> {{-- 写真表示 --}}
                        <div class="row">

                            {{-- <img class="col-lg-3 p-0 ms-2 avatar" src="{{$room->host_id}}" alt="host"> --}}
                            {{dd($room->users->image_url)}}
                            @empty ($room->host_id)
                                <img class="col-lg-3 p-0 ms-2 avatar" src="{{ asset('images/丸-中.png') }}" alt="host">
                            @else
                                <img class="col-lg-3 p-0 ms-2 avatar" src="{{ 'https://res.cloudinary.com/kyonowadai/image/upload/v1653567319/KYONOWADAI/tfiwcbvvvs6nak56voan.png' }}" alt="host">
                            @endempty

                            @empty (!$room->member_1_id)
                                <img class="col-lg-3 p-0 ms-2 avatar" src="{{ asset('images/丸-中.png') }}" alt="member_1">
                            @endempty

                            @empty (!$room->member_2_id)
                                <img class="col-lg-3 p-0 ms-2 avatar" src="{{ asset('images/丸-中.png') }}" alt="member_2">
                            @endempty

                            @empty (!$room->member_3_id)
                                <img class="col-lg-3 p-0 ms-2 avatar" src="{{ asset('images/丸-中.png') }}" alt="member_3">
                            @endempty
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-4 align-self-center"> {{-- 詳細分 150文字以内 --}}
                        <p class="my-3">{{ $room->detail }}</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3"> {{-- 参加人数/最大人数 --}}
                        <h5 class="m-0">{{ $room->number_of_people }}人/最大{{ $room->maximum_number_of_people }}人</h5>
                    </div>
                    <div class="col-3"> {{-- 開始時刻 --}}
                        <h5 class="m-0">開始時間　{{ $room->start_time }}</h5>
                    </div>
                    <div class="col-3"> {{-- 終了時刻 --}}
                        <h5 class="m-0">開催時間　{{ $room->hold_time }}</h5>
                    </div>
                    <div class="col-3 text-end"> {{-- 何分前の投稿か --}}
                        <h5 class="m-0">{{ $room->created_at->diffForHumans() }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $rooms->links() }}
    </div>
</section>
@endsection
