<?php

$server="localhost";
$username="root";
$password="";
$database="user_comments";

$conn=mysqli_connect($server,$username,$password,$database)

if(!$conn){//if check connection
	die("script>alert('connection Failed')</script>");
	
}





?>