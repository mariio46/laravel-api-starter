<?php

use App\Http\Controllers\Api\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Api\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::post(uri: 'register', action: [RegisteredUserController::class, 'store']);

Route::post(uri: 'login', action: [AuthenticatedSessionController::class, 'store']);

Route::post(uri: 'logout', action: [AuthenticatedSessionController::class, 'destroy'])->middleware(['auth:sanctum']);
