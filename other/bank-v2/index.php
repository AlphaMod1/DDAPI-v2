<?php
include './login/php/error.php';

$servername = "localhost";
$username = "u632487067_ddapi_prod";
$password = "Prodtheone1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./homepage/css/homepage.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <title>Bank V2</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="./index.php"><img src="./homepage/img/logov2.png" alt="Logo"></a>
        </div>
        <div class="login">
            <button class="login-btn"><a href="./login/login.php"><i class="fa fa-sign-in fa-1x"></i> Log In</a></button>
        </div>
    </header>
    <div class="nav">
    <a href="">Manage</a>
    <a href="">Make a payment</a>
    <a href="">Request payment</a>
    <a href="">Order a card</a>
    </div>
</body>
</html>
