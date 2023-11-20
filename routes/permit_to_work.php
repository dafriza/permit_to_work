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
        // Route::get('get_data_spv', function (PermitToWorkInterface $permit_to_work) {
        //     return $permit_to_work->getDirectSPV(Request $request);
        // })->name('get_data_spv');
        Route::get('get_data_spv', [PermitToWorkController::class, 'getDirectSPV'])->name('get_data_spv');
        Route::get('get_data_tools_equipment', [PermitToWorkController::class, 'getToolsEquipment'])->name('get_data_tools_equipment');
        Route::get('get_data_trades', [PermitToWorkController::class, 'getTrades'])->name('get_data_trades');
        Route::get('store_header', [PermitToWorkController::class, 'storeHeader'])->name('store_header');
    });
