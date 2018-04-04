@extends('layouts.master')

@section('content')
	@include('emailTemplates.standardHeader')
	<table>
		<tr>
			<td>
				<p>{ customer first name }</p>
			</td>
		</tr>
		<tr style="padding-bottom:0px;">
			<td>
				<p style="margin-bottom:5px;">
					My name is { salesperson } and I am the { ealership position } here at {dealership name}. We are currently searching for used { Vehicle Brand }'s for our inventory lot and often receive requests for locally bought and serviced vehicles. Since you have both purchased and serviced here at { dealership name }, your {model} is especially appealing.
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="margin-top:0;">
					As an added VIP bonus { brand } is currently offering a loyalty savings discount on all clients that decide to upgrade to a new { rand }.
				</p>
				<p style="-margin-bottom:0;">
					Please let me know if you have any questions
				</p>
			</td>
		</tr>
	</table>
	<table class="no_margin no_padd">
		<tr style="margin-bottom:10px; display:block;">
			<td>
				<p>Regards,</p>
			</td>			
		</tr>
		<tr>
			<td>
				<p>{ salesperson }</p>
			</td>
		</tr>
		<tr>
			<td>
				<h4 style="margin:8px 0 5px 0;">
					<b>Portfolio Specialist</b>
				</h4>
			</td>
		</tr>
		<tr style="margin:5px 0 8px 0; display:block;">
			<td>
				<p>Email: 
					<a href="mailto:{ sales person email }" title="{ name email address }">
						{ sales Person email }
					</a>
				</p>
			</td>
		</tr>
		<tr style="margin:5px;">
			<td>
				<p>Phone: <a href="tel:{sales Person Phone}">{ Sales Person Phone }</a></p>
			</td>
		</tr>
	</table>

@endsection
