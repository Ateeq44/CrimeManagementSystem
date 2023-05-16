<?php

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
Auth::routes();



Route::group(['middleware' => ['auth']], function() {

	Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);
	// Complaint
	Route::get('complaint', [App\Http\Controllers\ComplaintController::class, 'index']);
	Route::post('com-submit', [App\Http\Controllers\ComplaintController::class, 'complaint']);
	Route::get('com_delete/{id}', [App\Http\Controllers\ComplaintController::class, 'delete']);
	Route::get('com_edit/{id}', [App\Http\Controllers\ComplaintController::class, 'edit']);
	Route::post('com-update/{id}', [App\Http\Controllers\ComplaintController::class, 'update']);
	// Poloce Station
	Route::get('Police-Station', [App\Http\Controllers\PoliceStationController::class, 'police_station']);
	Route::post('po-submit', [App\Http\Controllers\PoliceStationController::class, 'store']);
	Route::get('po_delete/{id}', [App\Http\Controllers\PoliceStationController::class, 'delete']);
	Route::get('po_edit/{id}', [App\Http\Controllers\PoliceStationController::class, 'edit']);
	Route::post('po-update/{id}', [App\Http\Controllers\PoliceStationController::class, 'update']);
	// penal code section
	Route::get('Section', [App\Http\Controllers\AdminController::class, 'Section']);
	// Criminals
	Route::get('criminal', [App\Http\Controllers\CriminalController::class, 'criminal']);

});