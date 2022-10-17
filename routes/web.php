<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Konten;

Route::post('/tambahAdmin', [Admin::class, 'tambahAdmin']);
Route::post('/loginAdmin', [Admin::class, 'loginAdmin']);
Route::post('/hapusAdmin', [Admin::class, 'hapusAdmin']);
Route::post('/listAdmin', [Admin::class, 'listAdmin']);

Route::post('/tambahKonten', [Konten::class, 'tambahKonten']);
Route::post('/ubahKonten', [Konten::class, 'ubahKonten']);
Route::post('/hapusKonten', [Konten::class, 'hapusKonten']);
Route::post('/listKonten', [Konten::class, 'listKonten']);
