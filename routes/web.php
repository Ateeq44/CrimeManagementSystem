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

Route::middleware(['auth'])->group(function () {
	
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
	Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);
	// Complaint
	Route::get('complaint', [App\Http\Controllers\ComplaintController::class, 'index']);
	Route::post('com-submit', [App\Http\Controllers\ComplaintController::class, 'complaint']);
	// Poloce Station
	Route::get('Police-Station', [App\Http\Controllers\PoliceStationController::class, 'police_station']);
});