<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AyahsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SurahsController;

Route::get('/', function () {
    return view('beranda', ['title' => 'Beranda']);
});
Route::get('/surah_daftar', [SurahsController::class, 'index'])->name('surah.index');

Route::get('/surah/{surah}', [SurahsController::class, 'show'])->name('surah.show');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/ayah/{ayah}/qiraat', [AyahsController::class, 'qiraat'])->name('ayah.qiraat');
