<?php
session_start();
include './config.php';

// Check connection
if (!$con) {
  die("Connection failed: " . $conn->connect_error);
}

$FName=$_POST['fName'];
$LName=$_POST['lName'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$pass=$_POST['pass1'];

$sql = "INSERT INTO user_data (FName, LName,address,mobile,email,pass)
VALUES ('$FName', '$LName', '$address','$mobile','$email','$pass')";

try{
  if (mysqli_query($con,$sql) === TRUE) {
    header("Location: ./login.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  
  }
}

catch(Exception $e) {
  echo 'Error: Account already exists';
}

$conn->close();
?>  