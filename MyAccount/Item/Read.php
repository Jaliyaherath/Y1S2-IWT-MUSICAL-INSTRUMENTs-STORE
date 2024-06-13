<?php

	 require 'config.php';
	 
?>
<html>

    <body>
 <table border='1'>
            <h4>Product Details</h4>
            <tr>
                <!--<th>Product Table</th>-->
                <th>Pro_ID</th>
                <th>Pro_name</th>
                <th>Pro_Descrip</th>
                <th>Pro_Available</th>
                <th>Pro_Price</th>
               
            </tr>

            <tr>
                <td>       
                    <?php
					function readData(){
						
						global $conn;
						$sql = "SELECT * FROM product";
						$result = $conn->query($sql); 
						

                        if($result -> num_rows > 0)
                        {
							
                            while($row = $result -> fetch_assoc())
                            {
                                echo ("<tr>");
                                echo ("<td>" . $row['Pro_ID'] . "</td>");
                                echo ("<td>" . $row['Pro_name'] . "</td>");
                                echo ("<td>" . $row['Pro_Descrip'] . "</td>");
                                echo ("<td>" . $row['Pro_Available'] . "</td>");
                                echo ("<td>" . $row['Pro_Price'] . "</td>");
								echo("</tr>");
                            }
							
							
                        }
						
						else {
								echo "No results <br>"; 
						}
                    }
					readData();
					?>

					 </td>
					 </tr>
					 </table>                   
		</body>
		</html>