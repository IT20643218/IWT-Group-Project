<?php
    //Get values pass from form in Homepage.html file
	if (isset($_POST['username'])){
	$username= $_POST['username'];
	}
	if (isset($_POST['password'])){
	$password= $_POST['password'];
	}
	
	
	//connect to the server and select database
	$con=mysqli_connect ("localhost","root","","login");
	
	//get user inputs
	 $sql="INSERT INTO users(password,username)
	 VALUES('$username','$password')";
	 If($con->query($sql)==TRUE){
		 echo"Sucessfully your login";
	 }
	 else{
		 echo"Error".$sql,"<br>".$con->error;
	 }
	 

?>