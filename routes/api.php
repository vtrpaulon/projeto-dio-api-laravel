<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get('/pessoas', [PersonController::class, 'index']);
Route::post('/pessoas', [PersonController::class, 'store']);
Route::get('/pessoas/{id}', [PersonController::class, 'show']);
Route::put('/pessoas/{id}', [PersonController::class, 'update']);
Route::delete('/pessoas/{id}', [PersonController::class, 'destroy']);

