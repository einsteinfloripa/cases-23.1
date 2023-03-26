<?php

use App\Http\Controllers\MembersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rota do api abaixo

// Route::apiResource('/members', MembersController::class);
Route::apiResource('/members', MembersController::class);
