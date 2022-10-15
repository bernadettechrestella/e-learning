<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::post('/tambahAdmin', [Admin::class, 'tambahAdmin']);
Route::post('/loginAdmin', [Admin::class, 'loginAdmin']);
Route::post('/hapusAdmin', [Admin::class, 'hapusAdmin']);
Route::post('/listAdmin', [Admin::class, 'listAdmin']);
