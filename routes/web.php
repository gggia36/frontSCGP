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
    return view('web.index');
});
Route::get('legal', function () {
    return view('web.legal');
});
Route::get('privacy', function () {
    return view('web.privacy');
});
Route::get('contact', function () {
    return view('web.contact');
});
Route::get('sustainable', function () {
    return view('web.sustainable');
});
Route::get('sustainable', function () {
    return view('web.sustainable');
});
Route::get('sustainable-detail', function () {
    return view('web.sustainable-detail');
});
Route::get('packaging', function () {
    return view('web.packaging');
});
