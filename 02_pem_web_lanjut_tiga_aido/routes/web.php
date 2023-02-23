<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    echo ('ini adalah halaman awal website');
});


Route::prefix('category')->group(function () {
    Route::get('marbel-edu-games', function () {
        echo 'ini adalah halaman marbel edu games';
    });
    Route::get('marbel-and-friends-kids-games', function () {
        echo 'ini adalah halaman marbel and friends kids games';
    });
    Route::get('riri-story-books', function () {
        echo 'ini adalah halaman riri story books';
    });
    Route::get('kolak-kids-songs', function () {
        echo 'ini adalah halaman kolak kids songs';
    });
});

//route param /news
Route::get('/news/{id}', function ($id) {
    echo 'ini adalah halaman news dengan id ' . $id;
});

//menampilkan daftar program prefix
Route::prefix('program')->group(function () {
    Route::get('karir', function () {
        echo 'ini adalah halaman karir';
    });
    Route::get('magang', function () {
        echo 'ini adalah halaman magang';
    });
    Route::get('kunjungan-industri', function () {
        echo 'ini adalah halaman kunjungan industri';
    });
});

//menampilkan halaman about us
Route::get('/about-us', function () {
    echo 'ini adalah halaman about us';
});

//halaman contact us route resource only
Route::resource('contact-us', ContactController::class)->only([
    'index', 'store'
]);
