<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(base_path('routes/api/v1/api-v1.php'));


Route::fallback(function () {
    return response()->json([
        'message' => 'Not found, Check the url and try again',
    ], 404);
});
