@extends('layouts.master')
@section('content')
@include('emailTemplates.standardHeader')
<table>
	<tr>
		<td>
			<p> { Customer_first_name } </p>
		</td>
	</tr>
	<tr>
		<td>
			<p> My name is { User Name }, I’m one of the sales consultants at {dealership Name} and I wanted to follow up to address any concerns or needs you may have with your { Year } { Model } and/or { dealership Name }. As a courtesy that I like to offer to my clients, I would like to see if you would like to do an equity evaluation of your { Make } { Model } to identify any possible extra value you may have. </p>
		</td>
	</tr>
		<tr>
		<td>
			<p> If you have a specific sales consultant, you normally deal with I can pass along any needs you have to that person for your comfort. To make it easier for you I will call you soon to follow up and hear your feedback { First Name }.</p>
		</td>
	</tr>
</table>

@include('emailTemplates.standardFooter')
@endsection