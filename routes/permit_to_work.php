<?php

use App\Http\Controllers\PermitToWorkController;
use App\Services\PermitToWork\PermitToWorkInterface;
use Illuminate\Support\Facades\Route;

Route::prefix('permit_to_work')
    ->name('permit_to_work.')
    ->group(function () {
        Route::get('/', [PermitToWorkController::class, 'index'])->name('index');
        Route::get('get_data_spv', function (PermitToWorkInterface $permit_to_work) {
            return $permit_to_work->getDirectSPV();
        });
    });
