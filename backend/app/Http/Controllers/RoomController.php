<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $rooms = Room::orderBy('created_at', 'desc')->paginate(3);
        return view('application.join', compact('rooms'));
    }
}
