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
    Route::resource('user', UserController::class);
    // Route::get('profile', [UserController::class, 'edit'])->name('profile');
    // Route::post('profile/{progile}/post', [UserController::class, 'update'])->name('update');

    Route::get('/collect', [RoomController::class, 'view'])->name('collect');

    Route::post('/collected', [RoomController::class, 'update'])->name('collected');

    Route::get('/status', function () {
        return view('user.status');
    });
    //メール認証ができたユーザーのみ実行できるルート
});

// Route::get('/join', [App\Http\Controllers\HomeController::class, 'index'])->name('join');

Route::get('/join', [RoomController::class, 'index'])->name('join');

Route::get('/', function () {
    return view('/pages.home');
})->name('kyonowadai');

Route::get('/inquiry/input', function () {
    return view('pages.inquiry_input');
});

Route::get('/inquiry/compleate', function () {
    return view('pages.inquiry_compleate');
});

Route::get('/user/compleate', function () {
    return view('pages.user_compleate');
});
