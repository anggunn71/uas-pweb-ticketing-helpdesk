<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SolusiController;
use App\Http\Controllers\Api\KlienController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\AgenController;
use App\Http\Controllers\KategoriMasalahController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| Test API
|--------------------------------------------------------------------------
*/

Route::get('/tes', function () {
    return response()->json([
        'message' => 'API berhasil'
    ]);
});

/*
|--------------------------------------------------------------------------
| API Resource
|--------------------------------------------------------------------------
*/

Route::apiResource('agen', AgenController::class);

Route::apiResource('kliens', KlienController::class);

Route::apiResource('tikets', TiketController::class);

Route::apiResource('kategori-masalahs', KategoriMasalahController::class);

Route::apiResource('solusi', SolusiController::class);