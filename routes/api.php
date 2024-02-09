<?php

use App\Http\Controllers\Api\AuthenticatedUserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get(uri: 'user', action: AuthenticatedUserController::class);
});

require __DIR__ . '/auth.php';
