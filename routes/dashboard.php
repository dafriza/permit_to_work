<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {
        // Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('get_data_permit_to_work', 'getDataPermitToWork')->name('get_data_permit_to_work');
        });
    });
