<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/purchase_summary','emailTemplate@purchaseSummaryTemplate');
Route::get('/lease_summary','emailTemplate@leaseSummaryTemplate');
Route::get('/customer_buyback','emailTemplate@customerBuybackTemplate');
Route::get('/warranty_template','emailTemplate@warrantyTemplate');
Route::get('/new_assigned_client','emailTemplate@newAssignedClientTemplate');
Route::get('/service_appointment','emailTemplate@serviceAppointmentTemplate');
Route::get('/service_high','emailTemplate@serviceHighTemplate');
Route::get('/recent_service','emailTemplate@recentSericeTemplate');



