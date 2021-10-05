<?php

use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\UserController;
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

//routes group
Route::group(['prefix' => 'jurusan'], function () {
    Route::get('/', function () {
        return ('berhasil');
    });
    Route::get('/kelas/{namaKelas}', function ($namaKelas) {
        return $namaKelas;
    });
    Route::get('/wali-kelas/{nama}', function ($nama) {
        return $nama;
    });

});

//pakai controllers
Route::get('data-siswa', [DataSiswaController::class, 'datasiswa']);
Route::get('data-siswi', [DataSiswaController::class, 'datasiswi']);

Route::resource('user', UserController::class);

//index.blade
Route::get('profile', function () {
    return view('profile.index');
});
