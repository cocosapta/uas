<?php

namespace App\Http\Controllers;
use App\Models\Size;
use App\Models\Kategori;
use App\Models\Warna;
use Illuminate\Http\Request;
use App\Models\Barang;

class SistemController extends Controller
{
    public function add_warna(Request $request){
        Warna::create([
            'warna'=> $request->warna,
        ]);
        return redirect()->back();
    } 
    public function add_size(Request $request){
        Size::create([
            'size'=> $request->size,
        ]);
        return redirect()->back();
    }
    public function add_kategori(Request $request){
        Kategori::create([
            'nama_kategori_barang'=> $request->kategori,
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
}
