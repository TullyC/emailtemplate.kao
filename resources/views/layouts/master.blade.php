@include('layouts.header')


<style>
	body, #bodyTable { 
		margin:0; 
		padding:0;
		width:600px;
		border:1px solid red;
		margin:0 auto;
	}
	 body{
	 	padding:75px 150px 0px 75px;
	 }
 	img, a img {
 		border:0; 
 		outline:none; 
 		text-decoration:none;
 	 }
 	.imageFix { 
 		display:block; 
 	}
 	table, td {
 		border-collapse:collapse;
 	}
	*{
		font-family:‘Times New Roman’, Times, serif;
		font-size:1em;
	}
	h1{
		font-size:1.5em;
	}
	h2{
		font-size:1.4em;
	}
	h3{
		font-size:1.3em;
	}
	hr{
		width:95%;
		display:block;
		color:#000000;
		background-color:;
		 background-color: #000000; height: 3px; border: 0;

	}
	table{
		/*border: 1px solid black;
		border-spacing: 15px;*/
	}
	table td{
		padding:5px;
	}

	

	 tr{
	 	padding:15px;
	 }

	 /*utility Class remove from production*/
	 table tr{
	 	border:1px dotted black;
	 }
 /**
  *  Specific for summaryHeader.blade
  */
 .header_add{
 	border:1px solid black;
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
 /*	width:150px;
 	height:150px;*/
 	margin: 0 auto;
    display: block;
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

<body>
	<table>
		<tr>
			<td>
				@yield('content')
			</td>
		</tr>	
	</table>
</body>
@include('layouts.footer')
