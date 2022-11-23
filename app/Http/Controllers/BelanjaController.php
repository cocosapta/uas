<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelanjaController extends Controller
{
    public function belanja () {
        return view('include.shop');
    }

    public function populer () {
        return view('include.shop');
    }

    public function terbaru () {
        return view('include.shop');
    }
}
