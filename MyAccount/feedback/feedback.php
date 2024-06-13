<?php

	require 'config.php';
	
	$name = $_POST["fname"];
	$email = $_POST["email"];
	$message = $_POST["comments"];
	
	$sql = "INSERT INTO feedback( name, email, message)
	VALUES('$name','$email','$message')";

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