<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

# - Manage User :
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
