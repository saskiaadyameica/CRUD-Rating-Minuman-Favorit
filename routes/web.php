<?php

use App\Http\Controllers\MinumanController;

Route::get('/', [MinumanController::class, 'index']);
Route::post('/store', [MinumanController::class, 'store']);
Route::get('/edit/{id}', [MinumanController::class, 'edit']);
Route::post('/update/{id}', [MinumanController::class, 'update']);
Route::get('/delete/{id}', [MinumanController::class, 'destroy']);