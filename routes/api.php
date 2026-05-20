<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KlienController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\KategoriMasalahController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('kliens', KlienController::class);
Route::apiResource('tikets', TiketController::class);
Route::apiResource('kategori-masalahs', KategoriMasalahController::class);
