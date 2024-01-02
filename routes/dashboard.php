<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// middleware(['role:employee|supervisor', 'permission:read dashboard_user']
Route::middleware(['role:employee|supervisor', 'permission:read dashboard_user'])
    ->controller(DashboardController::class)
    ->prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('get_data_permit_to_work', 'getDataPermitToWork')->name('get_data_permit_to_work');
    });
