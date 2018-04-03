<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailTemplateController extends Controller
{
    public function purchaseSummaryTemplate(){

    	return view('emailTemplates.purchaseSummary');

    }

    public function leaseSummaryTemplate(){
    	return view('emailTemplates.leaseSummary');
    }

    public function customerBuybackTemplate(){
    	return view('emailTemplates.customerBuyback');
    }

    public function warrantyTemplate(){
    	return view('emailTemplates.warranty');

    }

    public function newAssignedClientTemplate(){
    	return view('emailTemplates.newAssignedClient');

    }

    public function serviceAppointmentTemplate(){
    	return view('emailTemplates.serviceAppointment');

    }

    public function serviceHighTemplate(){
    	return view('emailTemplates.serviceHigh');

    }

    public function recentSericeTemplate(){
    	return view('emailTemplates.recentSerice');
    	
    }
}
