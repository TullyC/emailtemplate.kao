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
	<table style="margin-bottom:15px;">
		<tr>
			<td> 
				<img src="/{warranty_information_bargraph}" alt="Warranty Information" />
			</td>
		</tr>
	</table>
	<table class="no_margin small_pad" style="margin-bottom:15px;">
		<tr>
			<td>
				<p><b><i>Start of Warranty date:</i></b> { Deal Date }</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>
					<b><i>Warranty Company:</i></b> { Warranty Description }
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<b><i>Est. of Warranty Remaining:</i></b> { Warranty Miles Remaining } KM
			</td>
		</tr>
	</table>


@include('emailTemplates.standardFooter')
@endsection
