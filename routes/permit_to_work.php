<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermitToWorkController;
use App\Models\PermitToWork;
use App\Services\PermitToWork\PermitToWorkInterface;

Route::prefix('permit_to_work')
    ->name('permit_to_work.')
    ->group(function () {
        Route::get('/', [PermitToWorkController::class, 'index'])->name('index');
        Route::get('/tra', [PermitToWorkController::class, 'tra'])->name('tra');
        // get_data
        Route::get('get_data_spv', [PermitToWorkController::class, 'getDirectSPV'])->name('get_data_spv');
        Route::get('get_data_tools_equipment', [PermitToWorkController::class, 'getToolsEquipment'])->name('get_data_tools_equipment');
        Route::get('get_data_trades', [PermitToWorkController::class, 'getTrades'])->name('get_data_trades');
        Route::get('get_data_header_cold_work', [PermitToWorkController::class, 'getHeaderColdWork'])->name('get_data_header_cold_work');
        Route::get('get_total_permits', [PermitToWorkController::class, 'getTotalPermits'])->name('get_total_permits');
      
            // find data
            Route::get('find_data_direct_spv/{id}', 'findDataDirectSPV')->name('find_data_direct_spv');
            Route::get('find_data_tools_equipment/{data_tools_equipment}', 'findDataToolsEquipment')->name('find_data_tools_equipment');
            Route::get('find_data_trades/{data_trades}', 'findDataTrades')->name('find_data_trades');

            // store
            Route::get('store_header', 'storeHeader')->name('store_header');
        });
    });
