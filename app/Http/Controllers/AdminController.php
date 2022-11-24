<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;
use App\Models\Kategori;
class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    } 
}
