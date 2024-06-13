<?php

	require 'config.php';
	
	$idNew = $_POST["feild0"];
	$nameNew = $_POST["feild1"];
	$desNew = $_POST["feild2"];
	$availableNew=$_POST["feild3"];
	$priceNew = $_POST["feild4"];
	
	$sql = "UPDATE Product 
			SET Pro_name='$nameNew' , Pro_Descrip='$desNew',
			Pro_Price='$priceNew' , Pro_Available='$availableNew' 
			WHERE Pro_ID = '$idNew'";
			
	if( $conn -> query($sql))
	{
		header("Location:Delete.php");
	}
	else{
		
		echo "<script> alert('Error in Updating')</script>";
	}

	$conn -> close() ;
?>