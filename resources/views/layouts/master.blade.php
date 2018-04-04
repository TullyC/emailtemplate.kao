@include('layouts.header')


<style>
	body, #bodyTable { 
		margin:0; 
		padding:0;
		width:600px;
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
