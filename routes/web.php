<?php

use App\Http\Controllers\PtwDummyController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
Route::get('/dashboard/user-profile', $controller_path . '\dashboard\UserProfile@index')->name('user-profile');

// form layouts
Route::get('/form/layouts-horizontaltesting', $controller_path . '\form_layouts\HorizontalTestingForm@index')->name('form-layouts-horizontaltesting');
Route::get('/form/layouts-horizontaltesting-page2', $controller_path . '\form_layouts\FormPage2@index')->name('form-layouts-horizontaltesting-page2');
Route::get('/form/layouth2s', $controller_path . '\form_layouts\h2s@index')->name('form-layouth2s');

// Ptw Management
Route::get('/ptw-management/ptwmanagement', $controller_path . '\ptw_management\PtwManagementController@index')->name('ptwmanagement');
Route::get('my_ptw_dummy', 'PtwDummyController@index');