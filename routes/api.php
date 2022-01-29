<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Lista de ordens
Route::get('ordem', [OrderController::class, 'index']);

// Lista uma única ordem
Route::get('ordem/{id}', [OrderController::class, 'show']);

// Cria uma nova ordem
Route::post('ordem', [OrderController::class, 'store']);

// Atualiza a ordem
Route::put('ordem/{id}', [OrderController::class, 'update']);

// Deleta uma ordem
Route::delete('ordem/{id}', [OrderController::class,'destroy']);