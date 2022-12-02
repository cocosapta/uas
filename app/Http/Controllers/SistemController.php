<?php

namespace App\Http\Controllers;
use App\Models\Size;
use App\Models\Kategori;
use App\Models\Warna;
use Illuminate\Http\Request;

class SistemController extends Controller
{
    public function form(){
        $Size = Size::all();
        $Kategori = Kategori::all();
        $Warna = Warna::all();
        return view('admin.form',compact('Size','Kategori','Warna'));
        
        
    }
}
