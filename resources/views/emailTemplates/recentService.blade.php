
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
			<p>My name is { salesperson } and I am the { dealership position } here at { ealership name }. I noticed that you recently stopped by service not too long ago and was curious if you were ever interested in having your { year } { model } evaluated by my sales manager.</p>
		</td>
	</tr>
	<tr>
		<td>
			<p>The reason I ask is we are currently searching for a very similar { Vehicle Brand }'s for our pre- owned inventory and often receive requests for locally bought or serviced vehicles.</p>
			<p>Please let me know if you would like to setup a time to review.</p>
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