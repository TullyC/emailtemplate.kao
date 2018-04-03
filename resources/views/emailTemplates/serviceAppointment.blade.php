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
			<p>My name is { salesperson } and I am the { dealership position } here at {dealership name}. I noticed that you have an upcoming service visit with us and was wondering if you would allow me to evaluate your { year } { make } { model } while its in for service.</p>
		</td>
	</tr>
	<tr>
		<td>
			<p>The reason I ask is we are currently searching for a very similar { ehicle Brand }'s for our pre- owned inventory and often receive requests for locally bought or serviced vehicles.</p>
		</td>
	</tr>
</table>

@include('emailTemplates.standardFooter')
@endsection