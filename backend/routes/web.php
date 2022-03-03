<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.home');
})->name('home');
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
Route::get('/user/index', 'UserController@index');
