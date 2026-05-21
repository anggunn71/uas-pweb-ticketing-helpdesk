<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/agen', function () {
    return view('agen');
});

Route::get('/tiket', [TiketController::class, 'index']);
Route::post('/tiket', [TiketController::class, 'store']);
Route::put('/tiket/{id}', [TiketController::class, 'update']);
Route::delete('/tiket/{id}', [TiketController::class, 'destroy']);

Route::get('/kategori-masalah', function () {
    return view('kategori-masalah');
});
