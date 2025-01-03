<?php

use App\Http\Controllers\api\v1\AuthController;
use Illuminate\Support\Facades\Route;


Route::post('/register', [AuthController::class, 'register']);


Route::middleware('auth:sanctum')->group(function () {

  Route::post('/logout', [AuthController::class, 'logout']);

  Route::post('/login', [AuthController::class, 'login']);
});
