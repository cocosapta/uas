<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login () {
        return view('include.login');
    }
    public function daftar (){
        return view('include.daftar');
    }
    public function logout (){
        return view('include.login');
    }
    public function index (){
        return view('include.login');
    }
    public function halbelumlogin (){
        return view('include.home');
    }
}
