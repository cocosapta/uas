<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login () {
        return view('include.login' , [ "title" => 'Login']);
    }
    public function daftar (){
        return view('include.daftar' , [ "title" => 'Daftar Akun']);
    }
    public function logout (){
        return view('include.login' , [ "title" => 'Login']);
    }
    public function index (){
        return view('include.login' , [ "title" => 'Login']);
    }
    public function halbelumlogin (){
        return view('include.home' , [ "title" => 'Login']);
    }
}
