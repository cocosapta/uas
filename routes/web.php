<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HubungikamiController;
use App\Http\Controllers\TentangkamiController;

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
Route::get('/',  
    [LoginController::class, 'login']
);
Route::get('/daftar', 
    [DaftarController::class, 'daftar']
);
Route::get('/logout',  
    [LogoutController::class, 'logout']
);
Route::get('/home', 
    [HomeController::class, 'home']
);
Route::get('/transaksi', 
    [TransaksiController::class, 'transaksi']
);
Route::get('/belanja',  
    [BelanjaController::class, 'belanja']
);
Route::get('/keranjang',  
    [KeranjangController::class, 'keranjang']
);
Route::get('/item',  
    [ItemController::class, 'item']
);
Route::get('/pembayaran', 
    [PembayaranController::class, 'pembayaran']
);
Route::get('/profile',  
    [ProfileController::class, 'profile']
);
Route::get('/setting', 
    [SettingController::class, 'setting']
);
Route::get('/hubungikami', 
    [HubungikamiController::class, 'hubungikami']
);
Route::get('/tentangkami', 
    [TentangkamiController::class, 'tentangkami']
);

