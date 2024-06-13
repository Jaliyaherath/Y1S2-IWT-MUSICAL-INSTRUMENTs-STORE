<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        *{
            margin: 0;
        }
        .container{
            width:100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        .container h1{
            font-family: 'Arial';
            font-size: 55px;
            color: blue;
            text-align: center;
            padding: 10px
        }

        .container p {
            font-family: 'Arial';
            text-align: center
        }
    </style>
</head>
<body>

<?php
if($_SESSION["Email"] and $_SESSION["Name"]){
?>
    <div class="container">
        <div>
            <h1>Hello <?php echo $_SESSION["Name"]; ?></h1> 
            <p>Click here to <a href="./logout.php">Logout</p>
        </div>
    </div>
<?php }else{
    header("Location: ./login.php");
} ?>
</body>
</html>