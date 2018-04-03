<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailTemplateController extends Controller
{
    public function purchaseSummaryTemplate(){

    	return view('emailTemplate.purchaseSummary');

    }

    public function leaseSummaryTemplate(){
    	return view('emailTemplate.leaseSummary');
    }

    public function customerBuybackTemplate(){
    	return view('emailTemplate.customerBuyback');
    }

    public function warrantyTemplate(){
    	return view('emailTemplate.warranty');

    }

    public function newAssignedClientTemplate(){
    	return view('emailTemplate.newAssignedClient');

    }

    public function serviceAppointmentTemplate(){
    	return view('emailTemplate.serviceAppointment');

    }

    public function serviceHighTemplate(){
    	return view('emailTemplate.serviceHigh');

    }

    public function recentSericeTemplate(){
    	return view('emailTemplate.recentSerice');
    	
    }
}
