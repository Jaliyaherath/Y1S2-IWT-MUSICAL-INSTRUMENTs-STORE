<?php

	 require 'config.php';
	 
?>

<html>

 <body>
		<table border='2'>
            <h2>Product Details</h2>
            <tr>
                <!--User Profile-->
                <th>U_ID</th>
                <th>U_firstname</th>
                <th>U_lastname</th>
                <th>U_address</th>
                <th>U_email</th>
				<th>U_Password</th>  
            </tr>

            <tr>
                <td>       
                    <?php
					function readData(){
						
						global $conn;
						$sql = "SELECT * FROM account";
						$result = $conn->query($sql); 
						
                        if($result -> num_rows > 0)
                        {
                            while($row = $result -> fetch_assoc())
                            {
                                echo ("<tr>");
                                echo ("<td>" . $row['U_ID'] . "</td>");
                                echo ("<td>" . $row['U_firstname'] . "</td>");
                                echo ("<td>" . $row['U_lastname'] . "</td>");
                                echo ("<td>" . $row['U_address'] . "</td>");
                                echo ("<td>" . $row['U_email'] . "</td>");
								echo ("<td>" . $row['U_Password'] . "</td>");
								echo("</tr>");
                            }
                        }
						else{
								echo "No results <br>"; 
							}
                    }
					readData();
					?>

					</td>
				</tr>
		</table>
		<br><br>
        <a href='uform.php'><button>Update Details</button></a><br><br>
		<a href='deleteaccount.php'><button>Delete Details</button></a><br><br>		
	</body>
</html>