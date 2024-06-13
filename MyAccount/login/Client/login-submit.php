<?php
session_start();
include './config.php';

if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 

$email = $_POST['email'];  
$password = $_POST['pass'];   
  
    $sql = "select * from user_data where email = '$email' and pass = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        $_SESSION["Email"] = $row['email'];
        $_SESSION["Name"] = $row['FName'];
        if(isset($_SESSION["Email"]) and isset($_SESSION["Name"])){
            header("Location: ./home.php");
        }
    }  
    else{  
        echo '<script>alert("Login Failed")</script>'; 
    } 

?>