<?php
 
   $username = filter_input(INPUT_POST, 'username');
   $usermail = filter_input(INPUT_POST, 'usermail');
   $location = filter_input(INPUT_POST, 'lacation');
   $message = filter_input(INPUT_POST, 'message');

   if (!empty($username)) {
   if (!empty($usermail)) {
   		$host = "localhost";
   		$dbusername = "root";
   		$dbpassword = "";
        $dbname = "project";

        //create connection
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()) {
            die('connect error ('. mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{
        	$sql = "INSERT INTO requirement (username, usermail, location, message) values ('$username','$usermail','$location','$message')";
        	if ($conn->query($sql)) {
        		echo "Requirement entered sucessfully";
        	}
        	else{
        		echo "error".$sql."<br>".$conn->error;
        	}
        	$con->close();
        }
   	}	
   	else{
   		echo "user mail should be fill";
   		die();
   	}
   }
   else{
   	echo "user name should be fill";
   	die();
   }

?>