<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('hallo pak');
});
Route::get('laravel', function () {
    return ('hallo laravel');
});
Route::get('php', function () {
    return ('ini php native');
});
Route::get('oop', function () {
    return ('hallo oop');
});
Route::get('index', function () {
    return ('hallo nama saya Adya');
});

//parameter wajib
Route::get('/nama-framework/{nama}/{tahun}', function ($nama, $tahun) {
    return 'nama framework yang dimasukan adalah : ' . $nama .
        '<br>Tahun <b>Rilis</b> : ' . $tahun;
});

//optional parameter
Route::get('/nama-saya-adalah/{nama?}', function ($nama = 'Wajib Diisi') {
    return ('hallo nama saya Adalah : ' . $nama);
});

Route::get('/hitung-luas-segitiga/{alas}/{tinggi}', function ($alas, $tinggi) {
    return 'hasil luas segitiga nya : ' . ($alas * $tinggi) * 0.5;
});
