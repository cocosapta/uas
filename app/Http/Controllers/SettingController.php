<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function setting () {
        return view('include.setting');
    }

     public function tentangkami(){
        return view('include.about');
    }

    public function profil()
    {
        return view('include.profile');
    }

     public  function hubungikami () {
        return view('include.contactme');
    }

}
