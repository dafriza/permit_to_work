<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermitToWorkController;
use App\Services\PermitToWork\PermitToWorkInterface;

Route::controller(PermitToWorkController::class)->group(function () {
    Route::prefix('permit_to_work')
        ->name('permit_to_work.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/tra', 'tra')->name('tra');

            // get_data
            Route::get('get_data_spv', 'getDirectSPV')->name('get_data_spv');
            Route::get('get_data_tools_equipment', 'getToolsEquipment')->name('get_data_tools_equipment');
            Route::get('get_data_trades', 'getTrades')->name('get_data_trades');
            Route::get('get_data_header_cold_work', 'getHeaderColdWork')->name('get_data_header_cold_work');
            Route::get('get_total_permits', 'getTotalPermits')->name('get_total_permits');
            Route::get('get_signature/{img}', 'getSignature')->name('get_signature');
            Route::get('print_permit_to_work', 'printPermitToWork')->name('print_permit_to_work');
            Route::get('detail_print_permit_to_work', 'detailPrintPermitToWork')->name('detail_print_permit_to_work');

            // find data
            Route::get('find_data_direct_spv/{id}', 'findDataDirectSPV')->name('find_data_direct_spv');
            Route::get('find_data_tools_equipment/{data_tools_equipment}', 'findDataToolsEquipment')->name('find_data_tools_equipment');
            Route::get('find_data_trades/{data_trades}', 'findDataTrades')->name('find_data_trades');

            // store
            Route::post('store_header', 'storeHeader')->name('store_header');

            // PTW Management
            Route::prefix('management')
                ->name('management.')
                ->group(function () {
                    Route::get('/', 'indexManagement')->name('index');
                    Route::get('detail_request/{id}', 'detailRequest')->name('detail_request');

                    // del data
                    Route::get('delete_permit_to_work/{id}', 'deletePermitToWork')->name('delete_permit_to_work');

                    // datatables
                    Route::get('datatables', 'datatables')->name('datatables');
                });
        });
});
