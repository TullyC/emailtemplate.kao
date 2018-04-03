@extends('layouts.master')

@section('content')
	<table>
		<tr>
			<td>
				<img src="default.jpg" alt="Dealership Logo" />
			</td>
			<td>
				{ Dealership Address }
				Phone: { Dealership Phone }
			</td>
		</tr>		
	</table>
	<table>
		<tr>
			<td>
				<p>{ customer first name }</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>
					My name is { alesperson } and I am the { ealership position } here at {dealership name}. We are currently searching for used { Vehicle Brand }'s for our inventory lot and often receive requests for locally bought and serviced vehicles. Since you have both purchased and serviced here at { dealership name }, your {model} is especially appealing.
				</p>
			</td>
			<td>
				<p>
					As an added VIP bonus { brand } is currently offering a loyalty savings discount on all clients that decide to upgrade to a new { rand }.
				</p>
				<p>
					Please let me know if you have any questions
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
			<td><p>{ salesperson }</p></td>
		</tr>
		<tr>
			<td>
				<h4>
					<b>Portfolio Specialist</b>
				</h4>
			</td>
			<td>
				<p>Email: 
					<a href="mailto:{ sales person email }" title="{ name email address }">
						{ sales Person email }
					</a>
				</p>
			</td>
			<td>
				<p>Phone: <a href="tel:{sales Person Phone}">{ Sales Person Phone }</a></p>
			</td>
		</tr>
	</table>






		



Phone: {sales Person Phone}

{dealership Logo}
@endsection
