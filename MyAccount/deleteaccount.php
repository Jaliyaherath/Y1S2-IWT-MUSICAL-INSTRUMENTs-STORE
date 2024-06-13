<?php

	 require 'config.php';
	 
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete Account Details</title>
</head>



 <?php
	
	$sql = " SELECT * FROM account WHERE U_ID";
		
	$result = $conn -> query( $sql ) ;
	
	if( $result  -> num_rows > 0 )
	{
		while( $row = $result -> fetch_assoc())
		{
			$iden = $row["U_ID"];
		}
	}
 
?>
 
 <br><br>
 <form method="POST" action="delete.php">
 
	<h2><center> Delete Account Details</center></h2>
 
	<label>  User ID </label>
	<input type="text" name="U_ID" id="iden" > <br><br>
 
	<input type="submit" name="submit" value= "Delete">
	
   <br><br>
 </form>
 </html>