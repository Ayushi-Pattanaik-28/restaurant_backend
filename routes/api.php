<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\MenuCardController;
use App\Http\Controllers\WebUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/signup', [WebUserController::class,'create']);
Route::post('/login', [AuthenticationController::class,'login']);

Route::middleware('auth:sanctum')->get('/user-profile', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/menucard', [MenuCardController::class, 'create']);
    Route::put('/menucard/{id}', [MenuCardController::class, 'update']);
    Route::delete('/menucard/{id}', [MenuCardController::class, 'destroy']);
});
Route::get('/menucard', [MenuCardController::class, 'read']);
