<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\GeneralController;
use App\Http\Controllers\Admin\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/reports',  [GeneralController::class, 'index'])->name('admin.reports');//->middleware('role:administrator');
Route::group(['prefix' => 'users'], function() {
    Route::get('staff', [UserController::class, 'staff'])->name('admin.users.staff');
    Route::get('broker', [UserController::class, 'broker'])->name('admin.users.broker');
    Route::get('client', [UserController::class, 'client'])->name('admin.users.client');
});
//Route::resource('reports', '')->name('admin.reports');

//Route::resource('yachts', '')->name('admin.yachts');
//Route::resource('charters', '')->name('admin.charters');
//Route::resource('activities', '')->name('admin.activities');
//Route::resource('preference_sheets', '')->name('admin.preference_sheets');
//Route::resource('graphics', '')->name('admin.graphics');
//Route::resource('sales', '')->name('admin.sales');
//Route::resource('bills', '')->name('admin.bills');
//Route::resource('commissions', '')->name('admin.commissions');
//Route::resource('orders', '')->name('admin.orders');
//Route::resource('holds', '')->name('admin.holds');
//Route::resource('apa', '')->name('admin.apa');