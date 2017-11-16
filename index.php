<?php
session_start();
if(isset($_GET['submit']))
{
	if(!empty($_GET['from']) && isset($_GET['to']))
	{
		$from=$_GET['from'];
		$to=$_GET['to'];
		header("Location:php/flights.php?from=$from && to=$to ");
	}
	else
	{
		echo "not set";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Airways Reservation</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	
	<div id="body">
		<ul>
			<li><a href="index.php" class="active">HOME</a></li>
			<li><a href="php/flights.php" >FLIGHTS</a></li>
			<li><a href="php/login.php">LOGIN</a></li>
			<li><a href="php/signup.php">SINGUP</a></li>
			<li><a href="#">CONTACT US</a></li>
		</ul>
	</div>
	<div id="search_area">
		<div id="search_box">
			<div id="form_area">
					<form method="get" action="#" class="search_form">
				<div class="input_box">
				<label for="Departure">From</label><br>
				<input type="name" name="from" autofocus>
				</div>
				<div class="input_box">
				<label for="Arrival">To</label><br>
				<input type="name" name="to">
				</div>
				<div class="input_box">
				<label for="Departure">Date</label><br>
				<input type="date" name="dep_date" autofocus>
				</div>
				<div class="input_box">
				<label for="Departure">Date</label><br>
				<input type="date" name="arr_date">
				</div>
				<input type="submit" id="submit" name="submit" value="SEARCH">

			</form>	
			</div>
			
		</div>
	</div>
	<div id="footer">
		
	</div>
</body>
</html>
	<style type="text/css" >
	body
	{
		padding: 0;
		margin: 0;
		font-family: arial;
		 height: 100vh;
	}
	h1
	{
		margin: 0;
	}
	
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: rgb(13, 72, 168);
    color:white;
}

	#search_area
	{
		
		width: 100vw;
	}
	#search_area>#search_box
	{
		
		background: rgb(13, 72, 168);
		height: 200px;
}
	}
		#search_area>#search_box label
		{
			color:white;
			font-size: 20px;
		}
		.input_box
		{
			border: none;
			display: inline-block;
			padding: 10px;
			color: white;
		}
		input:not(#submit)
		{
			height: 30px;
			background: rgb(13, 72, 168);
			 border: none;
			 color: white;
			 border-bottom:1px solid white;
		}
		input[type=submit]
		{
			color: white;
			background: rgb(150, 22, 22);
			border: none;
			padding: 10px;
		}
		#form_area
		{
			padding: 50px 0px;
		}
		input:focus
		{
			outline: none !important;

		}
	</style>