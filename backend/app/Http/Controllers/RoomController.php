<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;

class RoomController extends Controller
{
    public function __construct()
    {
        // 登録してあるユーザーかどうか
        $this->middleware('auth');
    }

    public function index()
    {
        $rooms = Room::orderBy('created_at', 'desc')->paginate(3);
        return view('application.join', compact('rooms'));
    }

    public function view()
    {
        return view('user.collect');
    }

    public function update(Request $request)
    {
        // ルーム内容をデータベースに登録
        $collect = new Room();
        $collect->host_id = Auth::id();
        $collect->title = $request->title;
        $collect->genre = $request->genre;
        $collect->maximum_number_of_people = $request->maximum_number_of_people;
        $collect->start_time = $request->start_time;
        $collect->hold_time = $request->hold_time;
        $collect->detail = $request->detail;

        $collect->save();

        return redirect('/join');
    }
}
