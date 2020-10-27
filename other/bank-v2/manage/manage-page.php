<?php 
$data = json_decode(file_get_contents('../login/json/accounts.json'), true);
require_once("../login/php/login-verification.php");
include("../login/php/error.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./homepage/css/homepage.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/manage.css">
    <link rel="stylesheet" href="../../../css/font-awesome.min.css">
    <title>Bank V2</title>
</head>
<body>
    <header>
        <div class="logo">
        <a href="../index.php"><img src="../homepage/img/logov2.png" alt="Logo"></a>
        </div>
        <div class="login">
            <button class="login-btn"><a href="../login/login.php"><i class="fa fa-sign-in fa-1x"></i> Log In</a></button>
        </div>
    </header>
    <div class="nav">
    <a href="../order-card/order-card.php">Order a card</a>
    <a href="../request-payment/request-payment.php">Request payment</a>
    <a href="../make-payment/make-payment.php">Make a payment</a>
    <a href="manage-page.php">Manage</a>
    </div>
    
</body>
</html>