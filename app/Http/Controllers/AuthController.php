<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119100,
            "Nama" => "Labibah Raihanatul Salwa",
            "Gender" => "Female",
            "Phone" => 681568415696,
            "Kelas" => "XII RPL 3"
        ];
    }

}
