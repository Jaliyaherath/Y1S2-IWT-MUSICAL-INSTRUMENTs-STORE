<?php

	include 'config.php';
	
	$name = $_POST['Pro_name'];
	$des= $_POST['Pro_Descrip'];
	$available=$_POST["Pro_Available"];
	$price = $_POST['Pro_Price'];
	
	
	
	
	
	$sql = "INSERT INTO Product(Pro_ID,Pro_name ,Pro_Descrip,Pro_Available,Pro_Price)
	VALUES('','$name','$des','$available','$price')";

	if(mysqli_query($conn,$sql))
	{
		echo "Successfully inserted";
	}
	else
	{
		echo "Error inserting" . $conn->error ;
	}

	mysqli_close($conn);



?>