@extends('layouts.master')

@include('emailTemplates.summaryHeader')
@section('content')
	<table>
		<tr>
			<td>
				<p>
					{ First Name },
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>
					I've reviewed your lease contract and noticed you are in the last { Payments Remaining } payments of your { Year } { Make } { Model } lease.
				</p>
			</td>
		</tr>
		<tr>
			<p>
				We would like to offer a complimentary { Make } Lease End evaluation. It will allow you to know what options you have available at the end of your lease. It could also give you the opportunity to get out of your lease in early to minimize future expenses such as excessive mileage penalties and excessive wear and tear. Above is a breakdown of where you are currently at in your lease.
			</p>
			
		</tr>
		<tr>
			<tr>
				<td>				
					Please contact me at your earliest convenience to setup a time to review your options.
				</td>
			</tr>
		</tr>
	</table>
	@include('emailTemplates.signOff')
@endsection