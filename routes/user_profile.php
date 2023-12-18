<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;

Route::prefix('user_profile')
    ->name('user_profile.')
    ->group(function () {
        Route::controller(UserProfileController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            // get data
            // Route::get('get_data_all_roles', 'getAllRoles')->name('get_data_all_roles');
            Route::get('get_data_permit_to_works', 'getDataPermitToWorks')->name('get_data_permit_to_works');
            // store data
            Route::post('update', 'update')->name('update');
            Route::post('delete', 'delete')->name('delete');
        });
    });
