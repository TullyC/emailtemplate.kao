
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

@include('emailTemplates.standardFooter')
@endsection