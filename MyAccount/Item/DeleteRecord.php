<?php

        include 'config.php';
	
	$idNew = $_POST["Pro_ID"];
	

        if(isset($_POST['submit']))
        {
            $idNew = $_POST['Pro_ID'];
            $query = "DELETE FROM product WHERE Pro_Id='$idNew'";
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