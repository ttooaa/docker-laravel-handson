<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

Auth::routes(['verify' => true]);

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/post_list', [App\Http\Controllers\HomeController::class, 'index'])->name('post_list');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('/pages.home');
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
Route::get('/inquiry/compleate', function () {
    return view('pages.inquiry_compleate');
});
Route::get('/user/input', function () {
    return view('auth.newregi');
});
Route::get('/user/compleate', function () {
    return view('pages.user_compleate');
});

Route::get('/1', function () {
    return view('auth.loginlara');
});

// お試し
Route::get('/log/{post}', [UserController::class, 'show']);

//テスト
Route::get('/user/index', [UserController::class, 'index']);
