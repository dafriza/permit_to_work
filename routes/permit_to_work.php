<?php

use App\Helper\RolesAndPermissionsHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermitToWorkController;
use App\Services\PermitToWork\PermitToWorkInterface;

$roleHelper = new RolesAndPermissionsHelper();

Route::controller(PermitToWorkController::class)
    ->prefix('permit_to_work')
    ->name('permit_to_work.')
    ->group(function () use ($roleHelper) {
        Route::middleware(['permission:read permit_to_work_cold', "role:{$roleHelper::roles[2]}|{$roleHelper::roles[1]}"])->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/tra', 'tra')->name('tra');

            // get_data
            Route::get('get_data_spv', 'getDirectSPV')->name('get_data_spv');
            Route::get('get_data_tools_equipment', 'getToolsEquipment')->name('get_data_tools_equipment');
            Route::get('get_data_trades', 'getTrades')->name('get_data_trades');
            Route::get('get_data_header_cold_work', 'getHeaderColdWork')->name('get_data_header_cold_work');
            Route::get('get_total_permits', 'getTotalPermits')->name('get_total_permits');
            Route::get('get_signature/{img}', 'getSignature')->name('get_signature');
            Route::get('detail_request/{id}', 'detailRequest')->name('detail_request');
            Route::get('print_permit_to_work', 'printPermitToWork')->name('print_permit_to_work');
            Route::get('detail_print_permit_to_work', 'detailPrintPermitToWork')->name('detail_print_permit_to_work');

            // find data
            Route::get('find_data_direct_spv/{id}', 'findDataDirectSPV')->name('find_data_direct_spv');
            Route::get('find_data_tools_equipment/{data_tools_equipment}', 'findDataToolsEquipment')->name('find_data_tools_equipment');
            Route::get('find_data_trades/{data_trades}', 'findDataTrades')->name('find_data_trades');
        });

        // store
        Route::middleware(['permission:create permit_to_work_cold', "role:{$roleHelper::roles[2]}|{$roleHelper::roles[1]}"])->group(function () {
            Route::post('store_header', 'storeHeader')->name('store_header');
        });

        // PTW Management
        Route::prefix('management')
            ->name('management.')
            ->group(function () use ($roleHelper) {
                Route::middleware(['permission:read permit_to_work_cold', "role:{$roleHelper::roles[2]}|{$roleHelper::roles[1]}"])->group(function () {
                    Route::get('/', 'indexManagement')->name('index');
                    // datatables
                    Route::get('datatables_index', 'datatablesIndex')->name('datatables_index');
                });

                Route::middleware(['permission:read permit_to_work_management', "role:{$roleHelper::roles[0]}|{$roleHelper::roles[2]}"])->group(function () {
                    Route::get('user', 'userManagement')->name('user');
                    Route::get('detail_request/{id}', 'detailRequest')->name('detail_request');
                    Route::get('datatables_user_management', 'datatablesUserManagement')->name('datatables_user_management');
                });

                Route::middleware(['permission:update permit_to_work_management', "role:{$roleHelper::roles[0]}|{$roleHelper::roles[2]}"])->group(function () {
                    Route::post('approval_request', 'approvalRequest')->name('approval_request');
                });

                Route::middleware(['permission:delete permit_to_work_cold', "role:{$roleHelper::roles[2]}|{$roleHelper::roles[1]}"])->group(function () {
                    // del data
                    Route::get('delete_permit_to_work/{id}', 'deletePermitToWork')->name('delete_permit_to_work');
                });
            });
    });
