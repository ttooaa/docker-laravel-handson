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
});
Route::get('/inquiry_input', function () {
    return view('pages.inquiry.inquiry_input');
});
Route::get('/inquiry_confirmation', function () {
    return view('pages.inquiry.inquiry_confirmation');
});
Route::get('/user/index', 'UserController@index');
