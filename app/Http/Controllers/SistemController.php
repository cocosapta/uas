<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Kategori;
use App\Models\Warna;
use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Auth\Events\Validated;

class SistemController extends Controller
{
    public function add_warna(Request $request)
    {
        Warna::create([
            'warna' => $request->warna,
        ]);
        return redirect()->back();
    }
    public function add_size(Request $request)
    {
        Size::create([
            'size' => $request->size,
        ]);
        return redirect()->back();
    }
    public function add_kategori(Request $request)
    {
        Kategori::create([
            'nama_kategori_barang' => $request->kategori,
        ]);
        return redirect()->back();
    }
    public function hapus_size($id_size)
    {
        $size = Size::find($id_size);
        $size->delete();
        return back()->with('destroy', 'Data Success di hapus');
    }
    public function hapus_warna($id_warna)
    {
        $warna = Warna::find($id_warna);
        $warna->delete();
        return back()->with('destroy', 'Data Success di hapus');
    }
    public function hapus_kategori($id_kategori_barang)
    {
        $kategori = Kategori::find($id_kategori_barang);
        $kategori->delete();
        return back()->with('destroy', 'Data Success di hapus');
    }
    public function status($id_barang, Request $request)
    {
        $barang = Barang::find($id_barang);
        if ($barang->status == 'ready') {
            $barang = $request->all();
            Barang::where(['id_barang' => $id_barang])->update([
                'status' => $barang['sold'],
            ]);
        } elseif ($barang->status == 'sold out') {
            $barang = $request->all();
            Barang::where(['id_barang' => $id_barang])->update([
                'status' => $barang['ready'],
            ]);
        }
        return redirect()->back()->with('success', 'Data Successfully');
    }
    public function tambah_barang(Request $request)
    {
        $request = Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga_satuan' => $request->harga_satuan,
            'jumlah_barang' => $request->jumlah_barang,
            'rating' => $request->rating,
            'id_size' => $request->size,
            'id_warna' => $request->warna,
            'foto_barang' => $request->file('gambar')->store('barang'),
            'id_kategori_barang' => $request->kategori,
            'deskripsi_barang' => $request->deskripsi,
        ]);
        return redirect()->back()->with('success');
    }
}
