<?php

	$server = "localhost";
	$username="root";
	$password= "";
	$database="onlineshop";
	
	
	//create the connection
	$conn = new mysqli($server,$username,$password,$database);
	
	//check the connection
	if($conn -> connect_error)
	{
		die("Connection Failed ".$conn->connect_error);
	}

	echo "Connected Successfully";

?>