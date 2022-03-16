<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/post_list', [App\Http\Controllers\HomeController::class, 'index'])->name('post_list');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kyonowadai', function () {
    return view('pages.home');
})->name('kyonowadai');

Route::get('/home', function () {
    return view('home');
});

Route::get('/my_page', function () {
    return view('application.my_page');
});

Route::get('/inquiry/input', function () {
    return view('pages.inquiry.input');
});
Route::get('/inquiry/confirmation', function () {
    return view('pages.inquiry.confirmation');
});
Route::get('/inquiry/completion', function () {
    return view('pages.inquiry.completion');
});
Route::get('/new_user/input', function () {
    return view('pages.new_user.input');
});
Route::get('/new_user/confirmation', function () {
    return view('pages.new_user.confirmation');
});
Route::get('/new_user/completion', function () {
    return view('pages.new_user.completion');
});
Route::get('/1', function () {
    return view('auth.login1');
});
Route::get('/1test', function () {
    return view('auth.logintest');
});

// お試し
Route::get('/log/{post}', [UserController::class, 'show']);

//テスト
Route::get('/user/index', [UserController::class, 'index']);
