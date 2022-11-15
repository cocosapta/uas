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

/* web user */
Route::get('/', function () {
    return view('include.login');
});
Route::get('/daftar', function () {
    return view('include.daftar');
});
Route::get('/logout', function () {
    return view('include.login');
});
Route::get('/home', function () {
    return view('include.home');
});
Route::get('/transaksi', function () {
    return view('include.transaction');
});
Route::get('/belanja', function () {
    return view('include.shop');
});
Route::get('/keranjang', function () {
    return view('include.bucket');
});
Route::get('/item', function () {
    return view('include.item');
});
Route::get('/pembayaran', function () {
    return view('include.bayar');
});
Route::get('/profile', function () {
    return view('include.profile');
});
Route::get('/setting', function () {
    return view('include.setting');
});
Route::get('/hubungikami', function () {
    return view('include.contactme');
});
Route::get('/tentangkami', function () {
    return view('include.about');
});

/* end route web user*/ 
