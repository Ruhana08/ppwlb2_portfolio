<?php

use Illuminate\Support\Facades\Route;

// Route ke halaman home
Route::get('/home', function () {
    return view('home');
})->name('home');

// Route ke halaman about
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route dengan parameter
Route::get('/halo/{nama}', function ($nama) {
    return 'Halo ' . $nama;
})->name('halo');

// Contoh tes redirect PHP (akses /ke-home otomatis pindah ke /home)
Route::get('/ke-home', function () {
    return redirect()->route('home');
});
