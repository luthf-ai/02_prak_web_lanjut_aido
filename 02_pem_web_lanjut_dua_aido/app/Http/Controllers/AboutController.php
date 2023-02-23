<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $nim = '2141720136';
        $nama = 'Aido Luthfi Al Hakim';

        echo 'NIM : ' . $nim . '<br>';
        echo 'Nama : ' . $nama;
    }
}
