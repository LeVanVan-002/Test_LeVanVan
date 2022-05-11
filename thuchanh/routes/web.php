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
// trang home
Route::get('/', function () {
    return view('themtt');
});
Route::get('/themtt', function () {
    return view('themtt');
});
route::post('/themtt/submit','App\Http\Controllers\myController@luuthongtin');
route::get('/themtt/submit','App\Http\Controllers\myController@luuthongtin');
// trang xem san pham
route::get('/xemtt','App\Http\Controllers\myController@xemtt');
Auth::routes();
