<?php

use App\Helper\RolesAndPermissionsHelper;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;

$access = 'user_profile';
$roleHelper = new RolesAndPermissionsHelper();
Route::middleware(["role:{$roleHelper::roles[1]}|{$roleHelper::roles[2]}"])
    ->controller(UserProfileController::class)
    ->prefix('user_profile')
    ->name('user_profile.')
    ->group(function () use ($access) {
        Route::middleware(['permission:read ' . $access])->group(function () {
            // get data
            Route::get('/', 'index')->name('index');
            // Route::get('get_data_all_roles', 'getAllRoles')->name('get_data_all_roles');
            Route::get('get_data_permit_to_works', 'getDataPermitToWorks')->name('get_data_permit_to_works');
        });

        Route::middleware(['permission:update ' . $access])->group(function () {
            // store data
            Route::post('update', 'update')->name('update');
        });

        Route::middleware(['permission:delete ' . $access])->group(function () {
            Route::post('delete', 'delete')->name('delete');
        });
    });
