<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="available.css">
	<title>Available Project</title>

</head>
<body>
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
		

	<!--Mid-->
	
	<div class="content-box">
				<div class="second-nav">
					<div class="secnd-nav1">
						<div class="dropdown">
						<button class="dropbtn">Projects</button>
						<div class="dropdown-content">
							<a href="#">Project 01</a>
							<a href="#">Project 02</a>
							<a href="#">Project 03</a>
						  </div>	
					</div>
			<div class="secnd-nav1">
					<h5 class="nav1"><a href="http://localhost/MLB_03.01_11/Lo&new/Homepage.html"target="_blank">Home</a></h5>
					<h5 class="nav2"><a href="http://localhost/MLB_03.01_11/DB/dashboard.php"target="_blank">Dashboard Preview</a></h5>
				</div>
	</div>
	</div>
	</div>
	
	<!--Site Body-->
	<label class="po">Project BCC022</label>
	
	<form action="new.php" method="post">
	
	<div class="row">
    <div class="col-25">
      <label for="Branch of company">Branch of company</label>
    </div>
    <div class="col-75">
      <input type="text" id="Branch of company" name="Branchofcompany" maxlength="100" size="100" placeholder="Branch of company">
    </div>
  </div><br>

  
  <div class="row">
    <div class="col-25">
      <label for="SM">Site Engineer</label>
    </div>
    <div class="col-75">
      <input type="text" id="Site Engineer" name="SiteEngineer" placeholder="Site Engineer..">
    </div>
  </div><br>

	
  <div class="row">
    <div class="col-25">
      <label for="Chief Manager">Chief Engineer</label>
    </div>
    <div class="col-75">
      <input type="text" id="Chief Engineer" name="ChiefEngineer" placeholder="Chief Engineer">
    </div>

  </div><br>
   
  <div class="row">
    <div class="col-25">
      <label for="Total project">Total Project Value</label>
    </div>
    <div class="col-75">
      <input type="text" id="Total Project Value" name="TotalProjectValue" placeholder="Total Project Value">
    </div>
  </div><br>

   
  <div class="row">
    <div class="col-25">
      <label for="project Duration">Project Duration</label>
    </div>
    <div class="col-75">
      <input type="text" id="Project Duration" name="ProjectDuration" placeholder="Project Duration">
    </div>
	<div>
		<!--<button  class="sub3" type="Submit">Submit</button>-->
	</div>
  </div><br> 
   <!--</form>-->
   
   
  <!--table-->
<table width="100%" cellpadding="10">
<tr>
</tr>
<tr>
<!--<form action="uplorddata.php" method="post">-->
<td><h3>workforce</h3></td>
<td><input type="checkbox" id="workforce" name="workfroce[]" value="Civil Enginner"required></td>
<td><label for="">Civil Enginner</label><br></td>
<td><input type="checkbox" id="workforce" name="workfroce[]" value="Superviser"required></td>
<td><label for="workforce">Supervise</label><br></td>
<td>  </td>
<td><h3>Machinery usage</h3></td>
<td><input type="checkbox" id="workforce" name="Machineryusage[]" value="Excavators"></td>
<td><label for="workforce">Excavators</label><br></td>
<td><input type="checkbox" id="workforce" name="Machineryusage[]" value="Tower cranes"></td>
<td><label for="workforce">Tower cranes</label><br></td>
</tr>
<tr>
<td> </td>
<td><input type="checkbox" id="workforce" name="workfroce[]" value="Construction Manager"required></td>
<td><label for="workforce">Construction Manager</label><br></td>
<td><input type="checkbox" id="workforce" name="workfroce[]" value="Painter"></td>
<td><label for="workforce">Painter</label><br></td>
<td>    </td>
<td>    </td>
<td><input type="checkbox" id="workforce" name="Machineryusage[]" value="Bullodzers"></td>
<td><label for="workforce">Bullodzers</label><br></td>
<td><input type="checkbox" id="workforce" name="Machineryusage[]" value="Pover"></td>
<td><label for="workforce">Pover</label><br></td>
</tr>

<tr>
<td> </td>
<td><input type="checkbox" id="workforce" name="workfroce[]" value="Arachitecture"></td>
<td><label for="workforce">Arachitecture </label><br></td>
<td><input type="checkbox" id="workforce" name="workfroce[]" value="Electrician"required></td>
<td><label for="workforce">Electrician</label><br></td>
<td> </td>  
<td> </td>
<td><input type="checkbox" id="workforce" name="Machineryusage[]" value="Graders"></td>
<td><label for="workforce">Graders</label><br></td>
<td><input type="checkbox" id="workforce" name="Machineryusage[]" value="Pile Boring Equripment"></td>
<td><label for="workforce">Pile Boring Equripment</label><br></td>

</tr>

<tr>
<td> </td>
<td><input type="checkbox" id="workforce" name="workfroce[]" value="Interintor Designer"required></td>
<td><label for="workforce">Interintor Designer</label><br></td>
<td><input type="checkbox" id="workforce" name="workfroce[]" value="Construction worker"required></td>
<td><label for="workforce">Construction worker</label><br></td>
<td>  </td>
<td>  </td>
<td>  </td>
<td>  </td>

</form>
</tr>
</table><br>
<!--End Table-->

<div>
<button class="sub1" type="Submit">Submit</button>
<!--<button  class="sub2" type="Submit">Submit</button>-->
</div>
	<div>
		<div class="dat"><label for="datetime">Starting Date:</label>
		<input type="date" id="datetime"name="datetime">
		
		<button class="butu1" type="button">Next</button>
		<button class="butu2" type="button">Feedback</button>
		</div>
			
	</div>	
	
	<!--Footer-->
			<div class="footer">
			<div>
				<p class="ftext"><u><b>Office Contact</b></u><br>No 304 B,1 st lane,Campus road<br>
						Raththanapitiya<br>
						Boralesgamuwa<br>
						071 1234567 / 011 9876542<br>
						info@bright.lk</p>
						
						</div>
			<div class="sec2">
				<img class="footer-image" src="Image/bg3.jpeg">
			</div>
				<form  action="db1.php">	
				<div class="signin">
					<input type="text" value placeholder="E-mail" id="mail" name="field1" style="margin-left: -60%">
					<button type="submit" name ="signin" id="B2" style="height: 40px; width: 50%">Sign in</button>
				</div>
				</form>
			</div>
			
		</div>
	
</body>
</html>