<?php

    include 'config.php';
	
	$iden = $_POST['U_ID'];

        if(isset($_POST['submit']))
        {
            $iden = $_POST['U_ID'];
            $query = "DELETE FROM account WHERE U_ID = '$iden'";
            $query_run = mysqli_query($conn,$query);
            
            if($query_run)
            {
                echo '<script> alert("Data deleted") </script>';
            }
            else
            {
                echo '<script> alert("Data not deleted") </script>';
            }
        }
?>