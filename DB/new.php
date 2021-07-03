<?php
	$Branchofcompany = $_POST['Branchofcompany'];
	$SiteEngineer = $_POST['SiteEngineer'];
	$ChiefEngineer = $_POST['ChiefEngineer'];
	$TotalProjectValue = $_POST['TotalProjectValue'];
	$ProjectDuration = $_POST['ProjectDuration'];

	/*echo $Branchofcompany;
	echo $SiteEngineer;
	echo $ChiefEngineer;
	echo $TotalProjectValue;
	echo $ProjectDuration;*/
	
	
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "projectdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

	$collectworkforce = '';
	//$machineryusage = '';  


	foreach($_POST['workfroce'] as $check) {
		$collectworkforce .=$check."/";
	}
	 $collectworkforce;
	


$sql = "INSERT INTO projectdata (Branchofcompany, SiteEngineer, ChiefEngineer, TotalProjectValue, ProjectDuration,workforce)
VALUES ('$Branchofcompany', '$SiteEngineer', '$ChiefEngineer','$TotalProjectValue','$ProjectDuration','$collectworkforce')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
	

	
	
	
	
	/*foreach($_POST['Machineryusage'] as $check) {
		$machineryusage .=$check."/";
	}
	
	echo $machineryusage;*/
	
?>