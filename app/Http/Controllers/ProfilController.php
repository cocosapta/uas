<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil()
    {
        $data_user =[
            'nama' => 'Nama lengkap Usernya',
            'username' => 'Username',
            'telepon' => '089765443355',
            'alamat' => 'Jl. Mabrur Kamit',
            'foto' => 'us.png',


        ];
        return view('include.profile', $data_user);
    }
}
