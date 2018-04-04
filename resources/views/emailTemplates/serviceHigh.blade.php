@extends('layouts.master')
@section('content')
@include('emailTemplates.standardHeader')
<table>
	<tr>
		<td>
			<p>{ customer_first_name }</p>
		</td>
	</tr>
	<tr>
		<td>
			<p>My name is {salesperson} and I am the {dealership position} here at {dealership name}. I noticed that recently you had some major work performed on your {year} {model}. We currently have a special scenario that allows clients to apply the cost of their service work to go towards a new vehicle if their current vehicle is starting to become too expensive to maintain.</p>
		</td>
	</tr>
	<tr>
		<td>
			<p>As an added VIP bonus {brand} is currently offering a loyalty savings discount on clients that decide to upgrade to a new {brand} from their existing.</p>
			<p>Please let me if an offer such as this would be something would be interested in.</p>
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