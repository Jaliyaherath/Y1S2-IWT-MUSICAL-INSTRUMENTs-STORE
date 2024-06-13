<?php

        include 'config.php';
	
	$idNew = $_POST["Pay_ID"];
	$nameNew = $_POST["fname"];
	$emailNew = $_POST["email"];
	$addressNew=$_POST["addr"];
	$cityNew = $_POST["city"];
	$zipyNew = $_POST["zip"];

        if(isset($_POST['submit']))
        {
            $idNew = $_POST['Pay_ID'];
            $query = "DELETE FROM payment WHERE Pay_Id='$idNew'";
            $query_run = mysqli_query($conn,$query);
            
            if($query_run)
            {
                echo '<script> alert("data delete") </script>';
            }
            else
            {
                echo '<script> alert("data not delete") </script>';
            }
        }
    ?>