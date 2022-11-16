<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelanjaController extends Controller
{
    public function belanja () {
        return view('include.shop');
    }
}
