<?php

	require 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<link rel="stylesheet" type="text/css" href="dashboard.css">
	<title>Dashboard Page</title>
</head>
<body>
	 	
		
     <div class="container">
		<div class="header">
			<div class="logo">
				<img class="logo-image" src="image/logo.png">
			</div>
			<div class="header-text">
				<h1 class="header1">Bright Construction PLC</h1>
				<h4 class="tagline">We are ready to help you to achive your goals</h5>
			</div>
			<div class="log-in">
				<img class="login-image" src="image/login.png">
				<button class="btn"><a href="http://localhost/MLB_03.01_11/Lo&new/Homepage.html"target="_blank">Login</a></button>
			</div>
		</div>
		
		<div class="main-content">
			<div class="sidebar">
				<ul>
					<li><a href="index.html">Financial KPI</a></li>
					<li><a href="http://localhost/MLB_03.01_11/Lo&new/NEW%20PROJECT%20.html"target="_blank">New Projects</a></li>
					<li><a href="http://localhost/MLB_03.01_11/DB/available.php"target="_blank">Available Projects</a></li>
					<li><a href="http://localhost/MLB_03.01_11/it20640798.pG/onging/ongoing.php"target="_blank">Ongoing projects</a></li>
					<li><a href="http://localhost/MLB_03.01_11/it20640798.pG/complete/complete.php"target="_blank">Completed Projects</a></li>
					<li><a href="http://localhost/MLB_03.01_11/php1/IWT%20project/our%20workforce.html"target="_blank">Our Workforce</a></li>
					<li><a href="http://localhost/MLB_03.01_11/php1/IWT%20project/metirial.html"target="_blank">Material</a></li>
				</ul>
			</div>
			</div>
			
			
			<div class="content-box">
			
				<div class="second-nav">
					<div class="menu1">
						<li class="menu" ><a href="http://localhost/MLB_03.01_11/Lo&new/Homepage.html"target="_blank">Home</a></li>
						<li class="menu" ><a href="http://localhost/MLB_03.01_11/DB/available.php"target="_blank">Available project</a></li>
					</div>
				
				</div>
				
				<div class="content">
					<div class="content-image" style="clear:both ">
						<div class="image1">
							<h2>Overview of the Company</h2>
							<fieldset>
							<legend class="text"><b>Bright Construction PLC</b></legend>
							
							<div class="pra">
							<form><table>
								<tr>
									<th>Total Completed Projects</th>
									<th>75</th>
								</tr>
								<tr>
									<th>Available Projects</th>
									<th>15</th>
								</tr>
								<tr>
									<th>Ongoing Projects</th>
									<th>10</th>
								</tr>
								<tr>
									<th>Our Workforce</th>
									<th>1250</th>
								</tr>
								<tr>
									<th>Total Annual Budget</th>
									<th>82,500,000.00</th>
								</tr>
								<tr>
									<th>Total Capex Budget</th>
									<th>5,500,000.00</th>
								</tr>
							</table>
							</div>
							
							</div></fieldset>
						</div>
						</div>
						
						<div class="image1">
							<!--Chart Start-->
							<div class="chart">
								<ul class="bars">
								<li><div class="bar" data-percentage="75"></div><span>2021</span></li>
								<li><div class="bar" data-percentage="85"></div><span>2020</span></li>
								<li><div class="bar" data-percentage="55"></div><span>2019</span></li>
								<li><div class="bar" data-percentage="40"></div><span>2018</span></li>
								<li><div class="bar" data-percentage="90"></div><span>2017</span></li>
								</ul>
							</div>
							<!--Chart End-->
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer">
			<div class="sec1">
				<p class="ftext"><u><b>Office Contact</b></u><br>No 304 B,1 st lane,Campus road<br>
						Raththanapitiya<br>
						Boralesgamuwa<br>
						071 1234567 / 011 9876542<br>
						info@bright.lk</p>
			</div>
			<div class="sec2">
				<img class="footer-image" src="Image/bg3.jpeg">
			</div>
			
			<form action="db1.php">
			<div class="signin">
					<input type="text" value placeholder="E-mail" id="mail" name="field1" style="height:49px;width:145%;margin-left: -125%;margin-top: 72%;">
					<button type="submit" id="B2" name="signin" style="height: 54px;width:73%">Sign in</button>
				</div>
				</form>
		</div>
			 
	 <!--Chart-->
	 
	<script type="text/javascript">
	$(function () {
	$('.bars li .bar').each(function (key,bar) {
		var percentage =$(this).data('percentage');
		$(this).animate({
			'height':percentage +'%'
		},1000);
	});
});
</script>

</body>
</html>
