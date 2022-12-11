<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate (Request $request) {
         $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('home');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

        // dd('berhasillogin');

        
    }
    public function daftar (){
        return view('auth.register' , [ "title" => 'Daftar Akun']);
    }
    public function logout (){
        return view('auth.login' , [ "title" => 'Login' ]);
    }
    public function index (){
        return view('auth.login' , [ "title" => 'Login' ]);
    }
    
}
