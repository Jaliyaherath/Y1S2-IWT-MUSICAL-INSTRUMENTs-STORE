

<?php

        include 'config.php';
	
	$idNew = $_POST["Pro_ID"];
	$nameNew = $_POST["Pro_name"];
	$desNew = $_POST["Pro_Descrip"];
	$availableNew=$_POST["Pro_Available"];
	$priceNew = $_POST["Pro_Price"];

        if(isset($_POST['submit']))
        {
            $idNew = $_POST['Pro_ID'];
			$nameNew = $_POST["Pro_name"];
			$desNew = $_POST["Pro_Descrip"];
			$availableNew=$_POST["Pro_Available"];
			$priceNew = $_POST["Pro_Price"];
            $query = "UPDATE product SET Pro_name='$nameNew',Pro_Descrip='$desNew',Pro_Available='$availableNew',Pro_Price='priceNew' WHERE Pro_Id='$idNew'";
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



