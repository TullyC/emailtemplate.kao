@extends('layouts.master')

@section('content')
<table>
	<tr>
		<td>
			<p><b>Addressed For:</b></p>
		</td>
	</tr>
	<tr>
		<td>
			<p>{ Full Name }</p>
		</td>
	</tr>
	<tr>
		<td>
			<p>{ Address }  { Address_2 }</p>
		</td>
	</tr>
	<tr>
		<td>
			<p>{ City }  { State } { Zip Code }</p>
		</td>
	</tr>
</table>

<table border="2 px solid black;">
	<tr>
		<td>
			<h1>Vehicle Contract Summary</h1>
		</td>
	</tr>
	<tr>
		<td>
			<img src="/default.jpg" alt="Dealer Logo">
		</td>
	</tr>
	<tr>
		<td>
			<p>{ dealership } { Logo }</p>
		</td>
	</tr>
</table>

<table>
	<tr>
		<td>
			<h2>Vehicle:</h2>
		</td>
		<td>
			<h3>{ Year }</h3>
		</td>
		<td>
			<h3>{ Make }</h3>
		</td>
		<td>
			<h3>{ Model }</h3>
		</td>
		<td>
			<h3>Last 8 of Vin: { Last 8 of vin }</h3>
		</td>
	</tr>
</table>

<br />

<table>
	<tr>
		<td>
			<h4>Amount Remaining:</h4>
		</td>
		<td>
			<h4>Payments Remaining:</h4>
		</td>
		<td>
			<h4>Estimated Mileage: { Estimated Mileage KM }</h4>
		</td>

	</tr>
	<tr>
		<td>
			<p>{ est. Payoff }</p>
		</td>
		<td>
			<p>{ Payments Remaining } Months</p>
		</td>
		<td>
			<p>{ Estimated Mileage } KM</p>
		</td>
	</tr>
	<tr>
		<td>
			<h4>Current Equity Position:</h4>
		</td>
		<td>
			<h4>Warranty Remaining:</h4>
		</td>
		<td>
			<h4>Current APR:</h4>
		</td>
	</tr>
	<tr>
		<td>
			<p>{ Est. Equity }</p>
		</td>
		<td>
			<p>{ Warranty Miles Remaining } miles OR { Warranty Months Remaining } Months
			</p>
		</td>
		<td>
			<p>{ APR }</p>
		</td>
	</tr>
	<tr><td><br /></td></tr>
</table>
<table>
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
<table>
	<tr>
		<td>
			<p>Regards,</p>
		</td>
	</tr>
	<tr>
		<td>
			<p>{ User Full Name }</p>
		</td>
	</tr>
	<tr>
		<td>
			<p>{ User Position }</p>
		</td>
	</tr>
	<tr>
		<td>
			<p><b>Email:</b> { User Email } 
		</td>
	</tr>
	<tr>
		<td>
			<p> 
				<b>Phone: </b> { User Phone }
			</p>
		</td>
	</tr>
	<tr>
		<td>
			<img src="default.jpg" alt="Dealership Logo">
		</td>
	</tr>
</table>

@endsection


