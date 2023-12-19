<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermitToWorkController;
use App\Models\PermitToWork;
use App\Services\PermitToWork\PermitToWorkInterface;

Route::prefix('permit_to_work')
    ->name('permit_to_work.')
    ->group(function () {
        Route::controller(PermitToWorkController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/tra', 'tra')->name('tra');
            // get_data
            Route::get('get_data_spv', 'getDirectSPV')->name('get_data_spv');

            Route::get('get_data_sc', 'getApproveSC')->name('get_data_sc');
            Route::get('get_data_pc', 'getApprovePC')->name('get_data_pc');
            Route::get('get_data_proc', 'getApproveProc')->name('get_data_proc');

            Route::get('get_data_tools_equipment', 'getToolsEquipment')->name('get_data_tools_equipment');
            Route::get('get_data_trades', 'getTrades')->name('get_data_trades');
            Route::get('get_data_header_cold_work', 'getHeaderColdWork')->name('get_data_header_cold_work');
            Route::get('get_data_header_cold_work_crc', 'getHeaderColdWorkCrc')->name('get_data_header_cold_work_crc');
            Route::get('get_data_header_cold_work_app_one', 'getHeaderColdWorkAppOne')->name('get_data_header_cold_work_app_one');

            Route::get('get_total_permits', 'getTotalPermits')->name('get_total_permits');
            Route::get('get_signature/{img}', 'getSignature')->name('get_signature');

            // find data
            Route::get('find_data_direct_spv/{id}', 'findDataDirectSPV')->name('find_data_direct_spv');

            Route::get('find_data_approve_sc/{id}', 'findDataApproveSC')->name('find_data_approve_sc');
            Route::get('find_data_approve_pc/{id}', 'findDataApprovePC')->name('find_data_approve_pc');
            Route::get('find_data_approve_proc/{id}', 'findDataApproveProc')->name('find_data_approve_proc');

            Route::get('find_data_tools_equipment/{data_tools_equipment}', 'findDataToolsEquipment')->name('find_data_tools_equipment');
            Route::get('find_data_trades/{data_trades}', 'findDataTrades')->name('find_data_trades');

            // store
            Route::post('store_header', 'storeHeader')->name('store_header');
            Route::post('store_header_crc', 'storeHeaderCrc')->name('store_header_crc');
            Route::post('store_header_app_one', 'storeHeaderAppOne')->name('store_header_app_one');

        });
    });
