<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SistemController;

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


/*ROUTE WEB USER */
Route::controller(KeranjangController::class)->group(function(){
    Route::get('/keranjang',[KeranjangController::class, 'keranjang']);
    Route::get('/keranjang/hapus/{id_keranjang}',[KeranjangController::class,'hapus']);
});

 Route::controller(ItemController::class)->group(function(){
    Route::get('/item/{id_barang}', [ItemController::class, 'item']);
    Route::post('/keranjang/tambah',[ItemController::class, 'tambah']);
});

Route::controller(TransaksiController::class)->group(function(){
    Route::get('/transaksi', [TransaksiController::class, 'transaksi']);
    Route::post('/bayar/{id_keranjang}',[TransaksiController::class, 'bayar'])->middleware();
    Route::get('/group', [TransaksiController::class, 'group']);
    Route::get('/checkout',[ TransaksiController::class, 'checkout']);
});

Route::prefix('setting')->group(function (){
    Route::get('', [SettingController::class,'setting']);
    Route::get('/hubungikami',[SettingController::class,'hubungikami' ] );
    Route::get('/tentangkami', [SettingController::class,'tentangkami']);
    Route::get('/profile', [SettingController::class, 'profil']);
});

Route::prefix('belanja')->group(function (){
    Route::get('', [BelanjaController::class,'belanja']);
    Route::get('/search', [BelanjaController::class,'search']);
    Route::get('/filter', [BelanjaController::class,'filter']);
    Route::get('/populer',[BelanjaController::class,'populer' ] );
    Route::get('/terbaru', [BelanjaController::class,'terbaru']);
});

Route::controller(LoginController::class)->group(function() {
    Route::get('/', 'index');
    Route::get('/daftar', 'daftar');
    Route::get('/logout', 'logout');
    Route::get('/login', 'index')->middleware('guest');
    Route::post('/login', 'authenticate');
});

/* END ROUTE WEB USER */

Route::group(['middleware' => ['auth']], function () {
    //  <----------------Route Meja-------------------------->
    Route::middleware(['auth', 'role:user'])->group(function () {
       
    });
    // <-------------------Route Admin----------------------------->
    Route::middleware(['auth', 'role:admin'])->group(function () {
    });
    
});

Route::controller(AdminController::class)->group(function() {
    Route::get('/dashboard', 'index');
    Route::get('/barang', 'barang');
    Route::get('/tambah', 'tambah');
    Route::get('/warna', 'warna');
    Route::get('/size', 'size');
    Route::get('/kategori', 'kategori');
});
Route::controller(SistemController::class)->group(function () {
    Route::post('/add.size', 'add_size');
    Route::get('/hapus.size/{id_size}', 'hapus_size');
    Route::post('/add.warna', 'add_warna');
    Route::get('/hapus.warna/{id_warna}', 'hapus_warna');
    Route::post('/add.kategori', 'add_kategori');
    Route::post('/status/{id_barang}', 'status');
    Route::get('/hapus.kategori/{id_kategori_barang}', 'hapus_kategori');
    Route::post('/tambah.barang','tambah_barang')->name('create');
});
Route::controller(SistemController::class)->group(function() {
    Route::get('/form', 'form');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




