<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "kade";  
  
$conn = mysqli_connect($host, $user, $password, $db_name);  

if ($conn -> connect_error){
	
	die ("Connection failed" .$conn -> connect_error);
	
}

else{
	
	echo "connected succesfully";
	
}
?>