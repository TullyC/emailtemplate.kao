<style>
/**
  *  Specific for summaryHeader.blade
  */
 .header_add{
 	margin-bottom:15px;
 }
 .header_contract{
 	width:550px !important;
 	height:150px !important;
 	border:5px solid black;
 }
 .header_contract tr{
 	margin: 0 auto;
 }
 .header_contract h1{
 	width: 200px;
    padding: 0;
    margin: 0;
    text-align:center;
 }


 .dealer_info_wrap{
 	padding: 0;
    height: 150px;
    display: block;
 }
 .dealer_info_wrap tr td{
 	padding:0;
 }

 .big_dealer_logo{
 	margin: 0 auto;
    display: block;
    margin-top:50px;
    margin:0 auto;
    max-width:300px;
 }

 .little_dealer_logo{
 	display:inline-block;
 	
 	margin-top:10px;
 	float:right
 	padding-right:10px;
 }
 
 .vehicle_info td{
 	padding:0;
 	display:inline-block;


 }
  .vehicle_info tr{
 	padding:0;
 	display:inline-block;
 	height:50px;
 	width:100%;


 }
</style>
	<table class="header_add">
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
				<p>{ City },  { State } { Zip Code }</p>
			</td>
		</tr>
	</table>

	<table class="header_contract" style="width:550px; height:150px;">
		<tr style="height:150px;" >
			<td style="width: 210px; height: 150px; padding:0;">
				<table style="height: 150px; display: inline-block;">
					<tr style="height: 100%; display: block;">
						<td style="padding-top:35px;">
							<h1>Vehicle Contract Summary</h1>
						</td>
					</tr>
				</table>
			</td>
			<td style="padding:0;">
				<table class="dealer_info_wrap" style="padding:0;height:150px;" >

					<tr style="width:300px; display:block; padding:0; height:100px; margin:0 auto;">
						<td style="padding:0; margin:0 auto;display:block; height:150px;">
							<img class="big_dealer_logo" src="/default.jpg" alt="Dealer Logo">
						</td>					
					</tr>	
			
				</table>
			</td>
		</tr>
	</table>

	<table class="vehicle_info" style="width:100%;">
		<tr>
			<td style="padding:0;">
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
	



<hr><!-- Drop shadows are not supported in older browsers -->

<table>
	<tr>
		<td style="width:30%;">
			<h4>Amount Remaining:</h4>
		</td>
		<td>
			<h4>Payments Remaining:</h4>
		</td>
		<td>
			<h4>Estimated Mileage:</h4>
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
<hr>