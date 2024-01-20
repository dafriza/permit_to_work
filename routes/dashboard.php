<?php

use App\Helper\RolesAndPermissionsHelper;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

$roleHelper = new RolesAndPermissionsHelper();
Route::controller(DashboardController::class)
    ->prefix('dashboard')
    ->name('dashboard.')
    ->group(function () use ($roleHelper) {
        Route::middleware(['permission:read dashboard_user|read dashboard_admin', "role:{$roleHelper::roles[0]}|{$roleHelper::roles[1]}|{$roleHelper::roles[2]}"])->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('get_data_permit_to_work', 'getDataPermitToWork')->name('get_data_permit_to_work');
            Route::get('get_count_notification', 'getCountNotification')->name('get_count_notification');
        });

        Route::middleware(['permission:update dashboard_user', "role:{$roleHelper::roles[2]}|{$roleHelper::roles[1]}"])->group(function () {
            Route::post('read_notification/{uuid}', 'readNotification')->name('read_notification');
            Route::post('read_all_notification', 'readAllNotification')->name('read_all_notification');
        });
    });
