
<?php
   require 'config.php';


    $email = $_GET["field1"];
	
	//echo $email;
	
$sql = "insert into e_mail(m_id,email)values('','$email')";
	
	
	
	if($con->query($sql) ) {
		echo "Inserted successfuly";
	}
	else{
		echo "record insert not succesful. Error :" . $con->error;
	}
	$con->close();




?>