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


Route::get('/purchase_summary','emailTemplateController@purchaseSummaryTemplate');
Route::get('/lease_summary','emailTemplateController@leaseSummaryTemplate');
Route::get('/customer_buyback','emailTemplateController@customerBuybackTemplate');
Route::get('/warranty_template','emailTemplateController@warrantyTemplate');
Route::get('/new_assigned_client','emailTemplateController@newAssignedClientTemplate');
Route::get('/service_appointment','emailTemplateController@serviceAppointmentTemplate');
Route::get('/service_high','emailTemplateController@serviceHighTemplate');
Route::get('/recent_service','emailTemplateController@recentServiceTemplate');



