<?php

	 require 'config.php';
	 
?>

<!DOCTYPE html>
<html>
<head>
<title>Payment Delete</title>
</head>



 <?php
	
	$sql = " SELECT * FROM payment WHERE Pay_ID";
		
	$result = $conn -> query( $sql ) ;
	
	if( $result  -> num_rows > 0 )
	{
		while( $row = $result -> fetch_assoc())
		{
			$payid = $row["Pay_ID"];
			$name = $row["full_name"];
			$email = $row["email"];
			$address = $row["address"];
			$city = $row["city"];
			$zip = $row["zip_code"];
		}
	}
 
?>
 
 <br><br>
 <form method="POST" action="DeleteRecord.php">
 
	<h2><center> Delete Payment</center></h2>
 
	<label>  Payment Id </label>
	<input type="text" name="Pay_ID" id="payid"> <br><br>
	
	<label>  First Name </label>
	<input type="text" name="fname" id="name" > <br><br>
 
	<label> Email </label>
	<input type="text" name="email" id="email"> <br><br>
 
	<label> Address </label>
	<input type="text" name="addr" id="address"> <br><br>
 
	<label> City </label>
	<input type= "text" name="city" id="city"> <br><br>
	
	<label> Zip </label>
	<input type= "number" name="zip" id="zip"> <br><br>
 
	<input type="submit" name="submit" value= "Delete">
   <br><br>
 </form>
 </html>