@include('layouts.header')


<style type="text/css">
	/*Fix for Apple Mail*/
	@media only screen and (min-device-width: 601px) {
		.content {width: 600px !important;}
	}

	body, #bodyTable { 
		margin:0; 
		padding:0;
		max-width:600px;
		margin:0 auto;
	}
	 body{
	 	padding:75px 150px 75px 75px;
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
		font-size: 1.5em;
    	float: left;
    	padding-right: 5px;
    	margin-bottom:0;
	}
	h3{
		font-size:1.0em;
		font-weight:900;
		margin:0;
	}
	hr{
		width:95%;
		display:block;
		color:#000000;
		background-color:;
		background-color: #000000; height: 3px; border: 0;
		margin-bottom:10px;
		margin-top:10px;
	}
	table{
		max-width:360px;
	}
	table td{
		padding:5px;
	}

	tr{
	 	/*padding:15px;*/
	}

	.no_padd tr{
		padding:0;
	}
	.no_padd td{
		padding:0;
	}

	.no_margin p{
		margin:0;
	}

	.small_pad p{
		padding-bottom:5px;
	}

	a{
		text-decoration:none;
		color:black;

	}
</style>

<body>
	<!--[if (gte mso 9)|(IE)]>
<table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td>
            <![endif]-->
	<table style="width:100%; position:relative;">
		<tr>
			<td>
				@yield('content')
			</td>
		</tr>	
	</table>
	<!--[if (gte mso 9)|(IE)]>
        </td>
    </tr>
</table>
<![endif]-->
</body>
@include('layouts.footer')
