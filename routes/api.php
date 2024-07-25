<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/suma/{num1}/{num2}', [APIController::class, 'suma']);
Route::get('/multiplicar/{num1}/{num2}', [APIController::class, 'multiplicar']);
Route::get('/resta/{num1}/{num2}', [APIController::class, 'resta']);