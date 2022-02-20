<?php

namespace App\Http\Controllers;

use App\Models;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index (Request $request)
    {
        $items = User::all();
        return view ('user.index', ['items' => $items]);
    }
}
