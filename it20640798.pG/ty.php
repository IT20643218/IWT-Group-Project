<? php
 
 $text=$_post["feedback"];
 $post=$_post["post"];

 if($post){

 	$write=fopen("com.txt","a+");
 	fwrite($write,"<u><b>$fee</b><u><br>");
 	fclose($write);

 }
 else{
 	echo "no data";
 	die();
 }
 ?>