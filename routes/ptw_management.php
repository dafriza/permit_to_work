<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ptw_management\PtwManagementController;


Route::controller(PtwManagementController::class)->group(function () {
    Route::get('/ptw-management/ptwmanagement', 'index');
});