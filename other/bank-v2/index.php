<?php
// if (!defined('LOC')) {
//     die('Direct access not permitted');
// }
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
    <?php
    include '../bank-v2/login/php/login-verification.php';
    if($loggedin == true){?>
        <div class="nav">
            <a href="">Send Money</a>
            <a href="">Request Money</a>
            <a href="">Manage Account</a>
        </div>

    <?php }?>
</body>
</html>
