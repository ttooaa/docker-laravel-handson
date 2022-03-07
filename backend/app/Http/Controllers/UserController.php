<?php

namespace App\Http\Controllers;

use App\Models;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //テスト
    public function index (Request $request)
    {
        $items = User::all();
        return view ('user.index', ['items' => $items]);
    }

    // お試し
    public function show ($post) {
    	return view('pages.login', [
    	'post' => $post
        ]);
    }
}
