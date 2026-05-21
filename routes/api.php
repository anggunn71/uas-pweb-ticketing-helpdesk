<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 feat/modul-agen
use App\Http\Controllers\AgenController;


use App\Http\Controllers\Api\KlienController;
 main
use App\Http\Controllers\Api\TiketController;
use App\Http\Controllers\KategoriMasalahController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

 feat/modul-agen
Route::apiResource('agen', AgenController::class);

Route::apiResource('tikets', TiketController::class);

Route::apiResource('kliens', KlienController::class);

Route::apiResource('tikets', TiketController::class);

Route::apiResource('kategori-masalahs', KategoriMasalahController::class);
 main
