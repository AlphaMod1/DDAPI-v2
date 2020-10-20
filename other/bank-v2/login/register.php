<?php
include './php/error.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>
<body>
<div id="formWrapper">
<div id="form">
<div class="logo">
<a href="../index.php"><img src="../homepage/img/logov2.png" alt="Logo"></a>
</div>
<form action="" method="POST">

    <div class="register-form">
        <div class="form-item">
            <input type="text" name="createUsername" class="form-style" placeholder="username" autocomplete="off"/>
        </div>
        <div class="form-item">
            <input type="password" name="createPassword" class="form-style" placeholder="password" />
        </div>
        <a  href="login.php" >Log In</a>
        <div class="form-item">
            <input type="submit" class="login pull-right" value="Create Account">
            <div class="clear-fix"></div>
        </div>
    </div>
</div>
</div>
</form>
<?php
$data = json_decode(file_get_contents('./json/accounts.json'), true);
$array = [
    "username" => $_POST["createUsername"],
    "password" => $_POST["createPassword"]
];
if(isset($_POST["createUsername"]) && isset($_POST["createPassword"])){
array_push($data["accounts"], $array);
unset($array);
file_put_contents('./json/accounts.json', json_encode($data));

}
?>
<script src="../login/js/login.js"></script>
</body>
</html>