@extends('layouts.master')
@section('content')
@include('emailTemplates.standardHeader')

	<table>
		<tr>
			<td>
				<p>Dear { first name }</p>
			</td>
		</tr>
		<tr>
			<td> 
				<p>I am reaching out to notify you that the new vehicle warranty on your { Year } { Model } will soon be expiring. Once your warranty expires, you will be responsible for any future repairs. There are multiple extended warranty options available to extend your coverage. I've included your current warranty details below for your review.</p>
			</td>
		</tr>
		<tr>
			<td> 
				<p>Please reach out to me if you would like to discuss some of your options</p>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td> <img src="/{warranty_information_bargraph}" alt="Warranty Information" /></td>
		</tr>
	</table>

@include('emailTemplates.standardFooter')
@endsection
