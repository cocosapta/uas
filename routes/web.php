<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\TransaksiController;
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


Route::get('/home', [
    HomeController::class, 'index'
]);
Route::get('/transaksi', [
    TransaksiController::class, 'transaksi'
]);
Route::get('/keranjang', [
    KeranjangController::class, 'keranjang'
]);
Route::get('/item', [
    ItemController::class, 'item'
]);
Route::get('/pembayaran',[
    PembayaranController::class, 'pembayaran'
]);

Route::prefix('setting')->group(function (){
    Route::get('', [SettingController::class,'setting']);
    Route::get('/hubungikami',[SettingController::class,'hubungikami' ] );
    Route::get('/tentangkami', [SettingController::class,'tentangkami']);
    Route::get('/profile', [SettingController::class, 'profil']);
});

Route::prefix('belanja')->group(function (){
    Route::get('', [BelanjaController::class,'belanja']);
    Route::get('/populer',[BelanjaController::class,'populer' ] );
    Route::get('/terbaru', [BelanjaController::class,'terbaru']);
});

Route::controller(LoginController::class)->group(function() {
    Route::get('/', 'halbelumlogin');
    Route::get('/daftar', 'daftar');
    Route::get('/logout', 'logout');
    Route::get('/login', 'login');
});



