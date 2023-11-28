<?php

use Illuminate\Support\Facades\Route;

Route::prefix('user-profile')
    ->name('user-profile.')
    ->group(function () {
        Route::controller(UserProfileController::class)->group(function () {
            Route::get('/', 'index')->name('index');
        });
    });
