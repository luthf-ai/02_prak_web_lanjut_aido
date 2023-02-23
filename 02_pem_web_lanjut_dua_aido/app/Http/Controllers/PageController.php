<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $title = 'selamat datang';
        echo $title;
    }

    public function about()
    {
        $nim = '2141720136';
        $nama = 'Aido Luthfi Al Hakim';

        echo 'NIM : ' . $nim . '<br>';
        echo 'Nama : ' . $nama;
    }

    public function articles($id)
    {
        echo 'Halaman Artikel dengan ID ' . $id;
    }
    //to use this controller u need to add this code to routes/web.php
    // Route::get('/', 'PageController@index');
    // Route::get('/about', 'PageController@about');
    // Route::get('/articles/{id}', 'PageController@articles');

    // u can access this function by typing http://localhost:8000/articles/1
}
