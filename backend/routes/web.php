<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoomController;
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

Auth::routes(['verify' => true]);

Route::middleware(['verified'])->group(function(){
    // Route::resource('user', [UserController::class]);
    Route::get('profile', [UserController::class, 'edit'])->name('profile');
    Route::post('profile', [UserController::class, 'update'])->name('update');

    Route::get('/collect', function () {
        return view('user.collect');
    });
    Route::get('/status', function () {
        return view('user.status');
    });
    //メール認証ができたユーザーのみ実行できるルート
    //例えば今後機能を実装していく際にメール認証を終えていないユーザーが見えないようにする機能が欲しい場合にここに記述する
});

// Route::get('/join', [App\Http\Controllers\HomeController::class, 'index'])->name('join');
Route::get('/join', [RoomController::class, 'index'])->name('join');

// いずれはresourcでUserControllerを回していく
// Route::resource('users', Usercontroller::class);

// Route::get('/users/profile', [UserController::class, 'show'])->name('profile');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('/pages.home');
})->name('kyonowadai');

Route::get('/home', function () {
    return view('home');
});

Route::get('/inquiry/input', function () {
    return view('pages.inquiry_input');
});
Route::get('/inquiry/compleate', function () {
    return view('pages.inquiry_compleate');
});
Route::get('/user/compleate', function () {
    return view('pages.user_compleate');
});
Route::get('/verifyorigin', function () {
    return view('auth.verifyorigin');
});
