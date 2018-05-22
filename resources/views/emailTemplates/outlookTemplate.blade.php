@extends('layouts.master')
@section('content')
	<table style="width:100%;">
		<tr>
			<td style="padding: 0 0 5px 0;"><h2>Christopher</h2><h2>Tully</h2></td>
		</tr>	
		<tr>
			<td style="padding: 0 0 5px 0;"><h3>Profit Driver Pro</h3></td>
		</tr>
		<tr>
			<td style="padding: 0 0 5px 0;"><h3>Web Developer</h3></td>
		</tr>
	</table>
	<table style="width:100%;">
		<tr style="display:inline-block;position:relative;width:55%;">
			<td>
				<table style="float:left;">
					<tr>
						<td style="padding: 0 0 5px 0;"><h3 style="float:left;">mobile </h3><a style="padding-left:5px;" href="tel:%%mobile%%">555-555-5555</a></td>		
					</tr>
					<tr>
						<td style="padding: 0 0 5px 0;"><a  style="float:left;" href="mailto:%%email%%">chris.tully12@gmail.com</a></td>		
					</tr>
					<tr><td style="padding: 0 0 5px 0;"><a style="float:left;" href="https://www.profitdriverpro.com" title="ProfitDriver Pro">www.profitdriverpro.com</a></td>		</tr>
				</table>
			</td>
		</tr>
		<tr style="display:inline-block;position:relative;width:45%;">
			<td style="padding:0;">
				<table style="padding-left: 20px; position: relative; display:block; bottom:10px;">
					<tr>
						<td style="padding:0;"><img src="{{ asset('img/pdp_bar_chart.png') }}" alt="ProfitDriver Pro" /></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	
	
	<table>
		<tr>
			<td><img src="{{ asset('img/pdp_signature_footer.png') }}" /></td>
		</tr>
	<table>
@endsection