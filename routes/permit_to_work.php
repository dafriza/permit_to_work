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
            Route::get('/', 'indexFirst')->name('index');
            Route::get('show/{id}', 'show')->name('show');
            Route::get('detail/{id}', 'detail')->name('detail');
            Route::get('/tra', 'tra')->name('tra');
            // get_data
            Route::get('get_data_spv', 'getDirectSPV')->name('get_data_spv');
            Route::get('get_data_sc', 'getApproveSC')->name('get_data_sc');
            Route::get('get_data_pc', 'getApprovePC')->name('get_data_pc');
            Route::get('get_data_proc', 'getApproveProc')->name('get_data_proc');
            // Approval 2
            Route::get('get_data_issue_aa', 'getIssueAA')->name('get_data_issue_aa');
            Route::get('get_data_acceptance_pa', 'getAcceptancePA')->name('get_data_acceptance_pa');
            // Approval 3
            Route::get('get_data_closed_out_pa', 'getClosedOutPA')->name('get_data_closed_out_pa');
            Route::get('get_data_closed_out_aa', 'getClosedOutAA')->name('get_data_closed_out_aa');
            // Approval 4
            Route::get('get_data_regis_work_pa', 'getRegisWorkPA')->name('get_data_regis_work_pa');
            Route::get('get_data_tools_equipment', 'getToolsEquipment')->name('get_data_tools_equipment');
            Route::get('get_data_trades', 'getTrades')->name('get_data_trades');
            // Route::get('get_data_header_cold_work', 'getHeaderColdWork')->name('get_data_header_cold_work');
            Route::get('get_data_header_cold_work/{id}', 'getHeaderColdWork')->name('get_data_header_cold_work');
            Route::get('get_data_header_cold_work_tra/{id}', 'getHeaderColdWorkTRA')->name('get_data_header_cold_work_tra');
            Route::get('get_data_header_cold_work_crc', 'getHeaderColdWorkCrc')->name('get_data_header_cold_work_crc');
            Route::get('get_data_header_cold_work_app_one', 'getHeaderColdWorkAppOne')->name('get_data_header_cold_work_app_one');
            Route::get('get_data_header_cold_work_app_two', 'getHeaderColdWorkAppTwo')->name('get_data_header_cold_work_app_two');
            Route::get('get_data_header_cold_work_app_three', 'getHeaderColdWorkAppThree')->name('get_data_header_cold_work_app_three');
            Route::get('get_data_header_cold_work_app_four', 'getHeaderColdWorkAppFour')->name('get_data_header_cold_work_app_four');

            Route::get('get_total_permits', 'getTotalPermits')->name('get_total_permits');
            Route::get('get_signature/{img}', 'getSignature')->name('get_signature');
            Route::get('detail_request/{id}', 'detailRequest')->name('detail_request');
            Route::get('print_permit_to_work/{id}', 'printPermitToWork')->name('print_permit_to_work');
            Route::get('detail_print_permit_to_work', 'detailPrintPermitToWork')->name('detail_print_permit_to_work');

            // find data
            Route::get('find_data_direct_spv/{id}', 'findDataDirectSPV')->name('find_data_direct_spv');

            Route::get('find_data_approve_sc/{id}', 'findDataApproveSC')->name('find_data_approve_sc');
            Route::get('find_data_approve_pc/{id}', 'findDataApprovePC')->name('find_data_approve_pc');
            Route::get('find_data_approve_proc/{id}', 'findDataApproveProc')->name('find_data_approve_proc');

            // Approval 2
            Route::get('find_data_issue_aa/{id}', 'findDataIssueAA')->name('find_data_issue_aa');
            Route::get('find_data_acceptance_pa/{id}', 'findDataAcceptancePA')->name('find_data_acceptance_pa');

            // Approval 3
            Route::get('find_data_closed_out_pa/{id}', 'findDataClosedOutPA')->name('find_data_closed_out_pa');
            Route::get('find_data_closed_out_aa/{id}', 'findDataClosedOutAA')->name('find_data_closed_out_aa');

            // Approval 4
            Route::get('find_data_regis_work_pa/{id}', 'findDataRegisWorkPA')->name('find_data_regis_work_pa');

            // Cut
            Route::get('find_data_tools_equipment/{data_tools_equipment}', 'findDataToolsEquipment')->name('find_data_tools_equipment');
            Route::get('find_data_trades/{data_trades}', 'findDataTrades')->name('find_data_trades');
        });
        // store
        Route::middleware(['permission:create permit_to_work_cold', "role:{$roleHelper::roles[2]}|{$roleHelper::roles[1]}"])->group(function () {
            Route::post('store_header', 'storeHeader')->name('store_header');
            Route::post('store_show_header', 'storeShowHeader')->name('store_show_header');
            Route::post('store_header_crc', 'storeHeaderCrc')->name('store_header_crc');
            // Route::post('store_header_tra', 'storeHeaderTRA')->name('store_header_tra');
            Route::post('store_header_tra', 'storeHeaderTRA')->name('store_header_tra');
            Route::post('store_header_app_one', 'storeHeaderAppOne')->name('store_header_app_one');
            Route::post('store_header_app_two', 'storeHeaderAppTwo')->name('store_header_app_two');
            Route::post('store_header_app_three', 'storeHeaderAppThree')->name('store_header_app_three');
            Route::post('store_header_app_four', 'storeHeaderAppFour')->name('store_header_app_four');
            Route::post('store_ptw_request', 'storePTWRequest')->name('store_ptw_request');
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
                    Route::post('reject_request', 'rejectRequest')->name('reject_request');
                    Route::post('signed_request', 'signedRequest')->name('signed_request');
                });

                Route::middleware(['permission:delete permit_to_work_cold', "role:{$roleHelper::roles[2]}|{$roleHelper::roles[1]}"])->group(function () {
                    // del data
                    // Route::get('delete_permit_to_work/{id}', 'deletePermitToWork')->name('delete_permit_to_work');
                    Route::post('delete_permit_to_work', 'deletePermitToWork')->name('delete_permit_to_work');
                });
            });
    });
