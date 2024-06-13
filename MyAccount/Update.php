<?php

    include 'config.php';
	
	$iden = $_POST["U_ID"];
	$fname = $_POST["U_firstname"];
	$lname = $_POST["U_lastname"];
	$address = $_POST["U_address"];
	$email = $_POST["U_email"];
	$password = $_POST["U_Password"];

        if(isset($_POST['submit']))
        {
            $iden = $_POST["U_ID"];
			$fname = $_POST["U_firstname"];
			$lname = $_POST["U_lastname"];
			$address = $_POST["U_address"];
			$email = $_POST["U_email"];
			$password = $_POST["U_Password"];
            $query = "UPDATE account SET U_firstname = '$fname',U_lastname = '$lname',U_address = '$address',U_email = '$email',U_Password = '$password' WHERE U_ID = '$iden'";
            $query_run = mysqli_query($conn,$query);
            
            if($query_run)
            {
                echo '<script> alert("data updated") </script>';
            }
            else
            {
                echo '<script> alert("data not updated") </script>';
            }
        }
    ?>