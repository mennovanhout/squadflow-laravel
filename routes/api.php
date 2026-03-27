<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/me', [AuthController::class, 'user']);
        Route::post('/fcm-token', [AuthController::class, 'fcmToken']);
        Route::post('/logout', [AuthController::class, 'logout']);

        Route::prefix('games')->group(function () {
            Route::post('/request', [AuthController::class, 'requestGame']);

            Route::prefix('{game}')->group(function () {
                Route::post('/claim', [AuthController::class, 'claimGame']);
                Route::post('/unclaim', [AuthController::class, 'unclaimGame']);
            });
        });
    });
});

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('games')->group(function () {
        Route::get('/', [GameController::class, 'index']);
        Route::get('/{game}/achievements-presets', [GameController::class, 'achievementsPresets']);
        Route::get('/{game}/achievements', [GameController::class, 'achievements']);
    });

    Route::prefix('friends')->group(function () {
        Route::get('/', [FriendController::class, 'index']);
        Route::post('/invite', [FriendController::class, 'invite']);
        Route::delete('/{invite}', [FriendController::class, 'remove']);
        Route::post('/{invite}/accept', [FriendController::class, 'accept']);
        Route::post('/{invite}/decline', [FriendController::class, 'decline']);
    });
});
