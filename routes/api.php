<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolusiController;

Route::get('/tes', function () {
    return 'API berhasil';
});

Route::apiResource('solusi', SolusiController::class);