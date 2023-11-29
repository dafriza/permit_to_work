<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Analytics;
use App\Http\Controllers\Dashboard\UserProfile;
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
Route::get('/', [Analytics::class, 'index'])->name('dashboard');
Route::get('/dashboard/user-profile', [UserProfile::class, 'index'])->name('user-profile');


Route::get('permit_to_work', [HorizontalTestingForm::class, 'index'])->name('permit_to_work');
Route::get('/form/layouts-horizontaltesting-page2', [FormPage2::class, 'index'])->name('form-layouts-horizontaltesting-page2');
Route::get('/form/layouth2s', [H2s::class, 'index'])->name('form-layouth2s');
