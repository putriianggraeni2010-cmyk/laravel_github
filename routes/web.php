<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('beranda');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/biodata', function () {
    return view('biodata');
});