<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermitToWorkController;
use App\Services\PermitToWork\PermitToWorkInterface;

Route::prefix('permit_to_work')
    ->name('permit_to_work.')
    ->group(function () {
        Route::get('/', [PermitToWorkController::class, 'index'])->name('index');
        // Route::get('get_data_spv', function (PermitToWorkInterface $permit_to_work) {
        //     return $permit_to_work->getDirectSPV(Request $request);
        // })->name('get_data_spv');
        Route::get('get_data_spv', [PermitToWorkInterface::class,'getDirectSPV'])->name('get_data_spv');
        Route::get('get_data_tools_equipment', [PermitToWorkInterface::class,'getToolsEquipment'])->name('get_data_tools_equipment');
    });
