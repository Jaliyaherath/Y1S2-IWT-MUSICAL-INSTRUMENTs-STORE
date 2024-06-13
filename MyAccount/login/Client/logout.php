<?php
session_start();
unset($_SESSION["Name"]);
unset($_SESSION["Email"]);
header("Location: ./login.php");
?>