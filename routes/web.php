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

Route::prefix('admin')->middleware(['auth'])->group(function(){


});

Route::prefix('/')->middleware(['auth'])->group(function() {
	// Route::get('admin-complaint', [App\Http\Controllers\AdminController::class, 'index']);

	// Route::get('admin-Criminal', [App\Http\Controllers\AdminController::class, 'criminal']);

	// Route::get('/', [App\Http\Controllers\ComplaintController::class, 'index']);
	// Complaint
	Route::get('/', [App\Http\Controllers\ComplaintController::class, 'index']);
	Route::post('com-submit', [App\Http\Controllers\ComplaintController::class, 'complaint']);
	Route::get('com_delete/{id}', [App\Http\Controllers\ComplaintController::class, 'delete']);
	Route::get('com_edit/{id}', [App\Http\Controllers\ComplaintController::class, 'edit']);
	Route::post('com-update/{id}', [App\Http\Controllers\ComplaintController::class, 'update']);
	Route::get('com_show/{id}', [App\Http\Controllers\ComplaintController::class, 'show']);
	// Poloce Station
	Route::get('Police-Station', [App\Http\Controllers\PoliceStationController::class, 'police_station']);
	Route::post('po-submit', [App\Http\Controllers\PoliceStationController::class, 'store']);
	Route::get('po_delete/{id}', [App\Http\Controllers\PoliceStationController::class, 'delete']);
	Route::get('po_edit/{id}', [App\Http\Controllers\PoliceStationController::class, 'edit']);
	Route::post('po-update/{id}', [App\Http\Controllers\PoliceStationController::class, 'update']);
	// penal code section
	Route::get('Section', [App\Http\Controllers\AdminController::class, 'Section']);
	Route::get('section_delete/{id}', [App\Http\Controllers\AdminController::class, 'delete']);
	Route::get('section_edit/{id}', [App\Http\Controllers\AdminController::class, 'edit']);
	Route::POST('Section_update/{id}', [App\Http\Controllers\AdminController::class, 'update']);
	// Criminals
	Route::get('criminal', [App\Http\Controllers\CriminalController::class, 'criminal']);
	Route::post('criminal-submit', [App\Http\Controllers\CriminalController::class, 'store']);
	Route::get('criminals_delete/{id}', [App\Http\Controllers\CriminalController::class, 'delete']);
	Route::get('criminals_edit/{id}', [App\Http\Controllers\CriminalController::class, 'edit']);
	Route::post('criminals_update/{id}', [App\Http\Controllers\CriminalController::class, 'update']);
	Route::get('view/{id}', [App\Http\Controllers\CriminalController::class, 'view']);
	// Criminal Profile Details
	Route::post('Arrest', [App\Http\Controllers\CriminalController::class, 'arrest']);
	Route::post('Fir', [App\Http\Controllers\CriminalController::class, 'fir']);
	Route::post('Payment', [App\Http\Controllers\CriminalController::class, 'Payment']);
	Route::post('PhoneNumber', [App\Http\Controllers\CriminalController::class, 'PhoneNumber']);
	Route::post('Travel', [App\Http\Controllers\CriminalController::class, 'Travel']);
	Route::post('Family', [App\Http\Controllers\CriminalController::class, 'Family']);
	Route::post('Property', [App\Http\Controllers\CriminalController::class, 'Property']);
	// Criminal Profile Edit
	Route::get('arrest_edit/{id}', [App\Http\Controllers\CriminalController::class, 'arrest_edit']);
	Route::get('fir_edit/{id}', [App\Http\Controllers\CriminalController::class, 'fir_edit']);
	Route::get('Payment_edit/{id}', [App\Http\Controllers\CriminalController::class, 'Payment_edit']);
	Route::get('PhoneNumber_edit/{id}', [App\Http\Controllers\CriminalController::class, 'PhoneNumber_edit']);
	Route::get('Travel_edit/{id}', [App\Http\Controllers\CriminalController::class, 'Travel_edit']);
	Route::get('Family_edit/{id}', [App\Http\Controllers\CriminalController::class, 'Family_edit']);
	Route::get('Property_edit/{id}', [App\Http\Controllers\CriminalController::class, 'Property_edit']);
	// Criminal Profile Delete
	Route::get('arrest_delete/{id}', [App\Http\Controllers\CriminalController::class, 'arrest_delete']);
	Route::get('fir_delete/{id}', [App\Http\Controllers\CriminalController::class, 'fir_delete']);
	Route::get('Payment_delete/{id}', [App\Http\Controllers\CriminalController::class, 'Payment_delete']);
	Route::get('PhoneNumber_delete/{id}', [App\Http\Controllers\CriminalController::class, 'PhoneNumber_delete']);
	Route::get('Travel_delete/{id}', [App\Http\Controllers\CriminalController::class, 'Travel_delete']);
	Route::get('Family_delete/{id}', [App\Http\Controllers\CriminalController::class, 'Family_delete']);
	Route::get('Property_delete/{id}', [App\Http\Controllers\CriminalController::class, 'Property_delete']);
	// Users
	Route::get('Users', [App\Http\Controllers\UserController::class, 'user']);
	Route::post('Users-sub', [App\Http\Controllers\UserController::class, 'store']);
	Route::get('user_delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);
	Route::get('user_edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);
	Route::post('user_update/{id}', [App\Http\Controllers\UserController::class, 'update']);
	// FIR
	Route::get('fir', [App\Http\Controllers\FirController::class, 'fir']);
	Route::post('fir-submit', [App\Http\Controllers\FirController::class, 'store']);
	Route::get('fir_delete/{id}', [App\Http\Controllers\FirController::class, 'delete']);
	Route::get('fir_edit/{id}', [App\Http\Controllers\FirController::class, 'edit']);
	Route::post('fir_update/{id}', [App\Http\Controllers\FirController::class, 'update']);
	Route::get('fir_show/{id}', [App\Http\Controllers\FirController::class, 'show']);

	// Profile Setting
	Route::get('profile/{id}', [App\Http\Controllers\AdminController::class, 'profile_edit']);
	Route::post('profile-update/{id}', [App\Http\Controllers\AdminController::class, 'profile_update']);

});