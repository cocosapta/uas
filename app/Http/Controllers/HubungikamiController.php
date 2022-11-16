<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HubungikamiController extends Controller
{
    public  function hubungikami () {
        return view('include.contactme');
    }
}
