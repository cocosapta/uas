<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;
use App\Models\Kategori;
use App\Models\Warna;
use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', ['title' => 'Dashboard'], ['content' => 'dashboard']);
    }
    public function barang()
    {
        // $b = Barang::join('warna', 'warna.id_warna', '=', 'barang.id_warna')->join('size', 'size.id_size', '=', 'barang.id_size')
        //     ->join('kategori_barang','kategori_barang.id_kategori_barang','=','barang.id_kategori_barang')
        //     ->select('barang.id_barang', 'warna.warna', 'size.size', 'barang.nama_barang', 'barang.harga_satuan', 'barang.foto_barang',
        //      'barang.rating', 'barang.jumlah_barang', 'kategori_barang.nama_kategori_barang',
        //     'barang.status',
        //     'barang.deskripsi_barang')->get();
            $b = Barang::join('size', 'size.id_size', '=', 'barang.id_size')->join('warna', 'warna.id_warna', '=', 'barang.id_warna')  
            ->select('barang.*','size.*','warna.*')->get();
        return view('admin.produk.barang', compact('b'), ['title' => 'Produk', 'content' => 'data barang']);
    }
    public function tambah()
    {
        $kt = Kategori::all();
        $s = Size::all();
        $w = Warna::all();
        $b = Barang::join('size', 'size.id_size', '=', 'barang.id_size')->join('warna', 'warna.id_warna', '=', 'barang.id_warna')->join('kategori_barang', 'kategori_barang.id_kategori_barang', '=', 'barang.id_kategori_barang')  
            ->select('barang.*','size.*','warna.*','kategori_barang.*')->get();
        return view('admin.produk.tambah', compact('b','w', 's', 'kt'), ['title' => 'Produk', 'content' => 'tambah barang']);
    }
    public function warna()
    {
        $w = Warna::all();
        return view('admin.produk.warna', compact('w'), ['title' => 'Detail Produk', 'content' => 'warna']);
    }
    public function size()
    {
        $s = Size::all();
        return view('admin.produk.size', compact('s'), ['title' => 'Detail Produk', 'content' => 'size']);
    }
    public function kategori()
    {
        $k = Kategori::all();
        return view('admin.produk.kategori', compact('k'), ['title' => 'Detail Produk', 'content' => 'size']);
    }
    public function user()
    {
        $u = User::all();
        return view('admin.user', compact('u'), ['title' => 'User', 'content' => 'User']);
    }
}
