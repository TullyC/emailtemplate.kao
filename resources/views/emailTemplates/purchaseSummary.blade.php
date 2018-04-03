@extends('layouts.master')

@include('emailTemplates.summaryHeader')
@section('content')
	<tr>
		<td>{ First Name },</td>
	</tr>
	<tr>
		<td>
			<p>I've reviewed your Finance contract and noticed you have made { Payments made } payments of your { Year } { Make } { Model } Purchase.</p>
			</td>		
	</tr>
	<tr>
		<td>
			<p>
				To keep present you and our records with the correct information, we have included a breakdown of your current contract and estimated equity position of your { Make }.   Currently { Make } is offering competitive rates as low as { incentive rate } as well as loyalty savings on a new { eplacement year } { replacement model } very similar to what you are driving now.
			</p>
			<p> 
				Please contact me at your earliest convenience to setup a time to review your options if you are thinking about upgrading your { year } { model }.  
			</p>
		</td>
	</tr>
</table>
	@include('emailTemplates.signOff')
@endsection


