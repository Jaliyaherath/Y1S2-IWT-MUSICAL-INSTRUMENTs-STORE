<?php

	 require 'config.php';
	 
?>

<!DOCTYPE html>
<html>
<head>
<title>Update Account Details</title>
</head>



 <?php
	
	$sql = " SELECT * FROM account WHERE U_ID = 'U_ID'";
		
	$result = $conn -> query( $sql ) ;
	
	if( $result  -> num_rows > 0 )
	{
		while( $row = $result -> fetch_assoc())
		{
			$iden = $row["U_ID"];
			$fname = $row["U_firstname"];
			$lname = $row["U_lastname"];
			$address = $row["U_address"];
			$email = $row["U_email"];
			$password = $row["U_Password"];
		}
	}
 
?>
 
 <br><br>
 <form method="POST" action="Update.php">
 
	<h2><center>Update Account Details</center></h2>
 
	<label>  User ID </label>
	<input type="text" name="U_ID" id="iden" > <br><br>
 
	<label> First name </label>
	<input type="text" name="U_firstname" id="fname" > <br><br>
	
	<label> Last name </label>
	<input type="text" name="U_lastname" id="lname" > <br><br>
	
	<label> Address </label>
	<input type="text" name="U_address" id="address" > <br><br>
	
	<label> Email </label>
	<input type="text" name="U_email" id="email" > <br><br>
	
	<label> Password </label>
	<input type="text" name="U_Password" id="password" > <br><br>
 
	<input type="submit" name="submit" value= "Update">
	
   <br><br>
 </form>
 </html>