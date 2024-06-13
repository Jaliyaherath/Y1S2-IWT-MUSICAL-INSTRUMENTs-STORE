<?php

	include 'config.php';
	
	
	$full_Name = $_POST['fname'];
	$email=$_POST["email"];
	$address = $_POST["addr"];
	$city = $_POST['city'];
	$zip_code = $_POST['zip'];
	  
	
	$sql = "INSERT INTO payment(Pay_ID,full_Name ,email,address,city,zip_code)
	VALUES('','$full_Name','$email','$address','$city','$zip_code')";

if(mysqli_query($conn,$sql)){
			/*echo "operation success1!!";*/
			echo '<script>alert("Record inserted sucessfully")</script>';
			/*header("Location:Payment.html");*/
		}
		else
		{
			echo '<script>alert("Record inserted unsucessfully")</script>';
			//echo "<script> ('Record inserted unsucessfully!!!!') </script>";
		}

	//close the function_exists
	mysqli_close($conn);


?> 