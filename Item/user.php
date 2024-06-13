 <?php

	 require 'config.php';
	 
?>

<!DOCTYPE html>
<html>
<head>
<title>Item update</title>
</head>



 <?php
	
	$sql = " SELECT * FROM product WHERE Pro_ID";
		
	$result = $conn -> query( $sql ) ;
	
	if( $result  -> num_rows > 0 )
	{
		while( $row = $result -> fetch_assoc())
		{
			$itemid = $row["Pro_ID"];
			$name = $row["Pro_name"];
			$des = $row["Pro_Descrip"];
			$available = $row["Pro_Available"];
			$price = $row["Pro_Price"];
		}
	}
 
?>
 
 <br><br>
 <form method="POST" action="submitadditems.php">
 
	<h2><center> Update Item</center></h2>
 
	
	<label>  Item Name </label>
	<input type="text" name="Pro_name" id="name" > <br><br>
 
	<label> Price </label>
	<input type="text" name="Pro_Price" id="price"> <br><br>
 
	<label> Available </label>
	<input type="text" name="Pro_Available" id="available"> <br><br>
 
	<label> Description </label>
	<textarea name="Pro_Descrip" id="des"> </textarea><br><br>
 
	<input type="submit" name="submit" value= "Update">
   <br><br>
 </form>
 </html>