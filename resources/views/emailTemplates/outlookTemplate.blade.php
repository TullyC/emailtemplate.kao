@extends('layouts.master')

@section('content')
	<table>
		<tr>
			<td><h2>%%first_name%% %%last_name%%</h2></td>
		</tr>	
		<tr>
			<td><h3>Profit Driver Pro</h3></td>
		</tr>
		<tr>
			<td><h3>%%title%%</h3></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td><h3>mobile:</h3><a href="tel:%%mobile%%">%%mobile%%</a></td>		
		</tr>
		<tr>
			<td><a href="mailto:%%email%%">%%email%%</a></td>		
		</tr>
		<tr><td><a href="https://www.profitdriverpro.com" title="ProfitDriver Pro"></a></td>		</tr>
	</table>
	<table>
		<tr>
			<td><img src="pdp_bar_chart.png" alt="ProfitDriver Pro" /></td>
		</tr>
	</table>
@endsection
<table>
	<tr>
		<td><img src="pdp_footer.png" /></td>
	</tr>
<table>