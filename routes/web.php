<?php

use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\ProfilSekolahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::resource('profil', ProfilSekolahController::class);

Route::resource('ekstrakurikuler', EkstrakurikulerController::class);

Route::get('/galeri', function () {
    return view('galeri.index');
});



Route::get('/sdm', function () {
    return view('sdm.index');
});

