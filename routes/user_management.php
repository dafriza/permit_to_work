<?php

use Illuminate\Support\Facades\Route;
use App\Helper\RolesAndPermissionsHelper;
use App\Http\Controllers\UserManagementController;

$access = 'user_management';
$roleHelper = new RolesAndPermissionsHelper();
Route::middleware(["role:{$roleHelper::roles[0]}"])
    ->controller(UserManagementController::class)
    ->prefix('user_management')
    ->name('user_management.')
    ->group(function () use ($access) {
        Route::middleware(['permission:read ' . $access])->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('datatables_index', 'datatablesIndex')->name('datatables_index');
            Route::get('get_permissions_user/{id}', 'getPermissionsUser')->name('get_permissions_user');
        });
        Route::middleware(['permission:create ' . $access])->group(function () {
            Route::post('create_user', 'createUser')->name('create_user');
        });
        Route::middleware(['permission:update ' . $access])->group(function () {
            Route::post('update_user', 'updateUser')->name('update_user');
        });
        Route::middleware(['permission:delete ' . $access])->group(function(){
            Route::post('delete_user', 'deleteUser')->name('delete_user');
        });
    });
