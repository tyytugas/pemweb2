<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $data = [
        'nama' => 'Kartika',
        'nim' => '0110123158',
        'program_studi' => 'Sistem Informasi',
        'tahun_angkatan' => '2023',
    ];
    return view('about', $data);
});
