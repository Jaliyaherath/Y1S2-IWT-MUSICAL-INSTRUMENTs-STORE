<?php

	 require 'config.php';
	 
?>

<!DOCTYPE html>
<html>
<head>
<title>Item Delete</title>
</head>



 <?php
	
	$sql = " SELECT * FROM product WHERE Pro_ID";
		
	$result = $conn -> query( $sql ) ;
	
	if( $result  -> num_rows > 0 )
	{
		while( $row = $result -> fetch_assoc())
		{
			$itemid = $row["Pro_ID"];
			
		}
	}
 
?>
 
 <br><br>
 <form method="POST" action="DeleteRecord.php">
 
	<h2><center> Delete Item</center></h2>
 
	<label>  Item Id </label>
	<input type="text" name="Pro_ID" id="itemid"> <br><br>
	
 
	<input type="submit" name="submit" value= "Delete">
   <br><br>
 </form>
 </html>