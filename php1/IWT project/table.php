<?php
 
   $Lname = filter_input(INPUT_POST, 'Lname');
   $Lcato = filter_input(INPUT_POST, 'Lcato');
   $Wpro = filter_input(INPUT_POST, 'Wpro');
   $Jtype = filter_input(INPUT_POST, 'Jtype');
   $Apro = filter_input(INPUT_POST, 'Apro');
   $skill = filter_input(INPUT_POST, 'skill');

  
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
          $sql = "INSERT INTO new labor (Lname, Lcato, Wpro, Jtype, Apro, skill) values ('$Lname','$Lcato','$Wpro','$Jtype','$Apro','$skill')";
          if ($conn->query($sql)) {
            echo "Requirement entered sucessfully";
          }
          else{
            echo "error".$sql."<br>".$conn->error;
          }
          $conn->close();
        }
 

?>