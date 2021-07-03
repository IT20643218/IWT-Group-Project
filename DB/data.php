<?php


	//Linking the configuration file
	require 'config.php';
	
	$Branchofcompany = $_POST['Bcompany'];
	$SiteEngineer = $_POST['SEngineer'];
	$ChiefEngineer = $_POST['CEngineer'];
	$TotalProjectValue = $_POST['TValue'];
	$ProjectDuration = $_POST['PDuration'];
		
	
	$sql= "INSERT INTO projectdata(Branchofcompany,SiteEngineer,ChiefEngineer,TotalProjectValue,ProjectDuration)
	VALUES('$Branchofcompany','$SiteEngineer','$ChiefEngineer','$TotalProjectValue','$ProjectDuration')";
	
	if($con->query($sql)){
		echo "Inserted successfully";
	}
	else{
		echo "Error:". $con->error;
	}
	
	$con->close();

?>
