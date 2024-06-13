<?php

	require 'config.php';
	
	$name = $_POST['Fname'];
	$email = $_POST['email'];
	$mobile = $_POST['mno'];
	$message = $_POST['msg'];
	
	$sql = "INSERT INTO contactus( name, email, mobile,message)
	VALUES('$name','$email','$mobile','$message')";

	if($conn -> query($sql))
	{
		echo "Successfully inserted";
	}
	else
	{
		echo "Error inserting" . $conn->error ;
	}

	$conn->close();

?>