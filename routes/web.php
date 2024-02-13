<?php

use App\Http\Controllers\PtwDummyController;
use App\Models\PtwDummy;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Analytics;
use App\Http\Controllers\Dashboard\UserProfile;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\form_layouts\HorizontalTestingForm;
use App\Http\Controllers\form_layouts\H2s;
use App\Http\Controllers\form_layouts\FormPage2;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$controller_path = 'App\Http\Controllers';

// Main Page Route
// Route::get('/', [Analytics::class, 'index'])->name('dashboard');
Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/user-profile', [UserProfile::class, 'index'])->name('user-profile');
Route::get('test', function () {
    // return view('content.permit_to_work.test');
    return view('content.permit_to_work.ptw_print.original_worksite');
});
Route::get('test_2', function () {
    // return view('content.permit_to_work.test');
    return view('content.permit_to_work.ptw_print.original_worksite_print');
});
Route::get('test_3', function () {
    // return view('content.permit_to_work.test');
    return view('content.permit_to_work.ptw_print.detail_original_worksite_print');
});

// Auth
Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('login-basic')->middleware(('guest'));
Route::post('postLogin', $controller_path . '\authentications\LoginBasic@postLogin')->name('postLogin');
Route::get('logout', $controller_path . '\authentications\LoginBasic@logout')->name('logout');


Route::group(['middleware' => ['auth', 'role:superadmin|supervisor|employee']], function () {
    $controller_path = 'App\Http\Controllers';
    // Dashboard
    Route::get('/dashboard', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
    Route::get('/dashboard/user-profile', $controller_path . '\dashboard\UserProfile@index')->name('user-profile');
});

Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    $controller_path = 'App\Http\Controllers';
    // Ptw Management
    Route::get('/ptw-management/ptwmanagement', $controller_path . '\ptw_management\PtwManagementController@index')->name('ptwmanagement');
    Route::get('my_ptw_dummy', 'PtwDummyController@index');
});
