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
            <input type="text" name="createUser" id="user" class="form-style" placeholder="username" autocomplete="off"/>
        </div>
        <div class="form-item">
            <input type="password" name="createPassword" id="password" class="form-style" placeholder="password" />
        </div>
        <div class="form-item">
            <p class="pull-left"><a href="login.php"><small>Log In</small></a></p>
            <input type="submit" class="login pull-right" value="Create Account">
            <div class="clear-fix"></div>
        </div>
    </div>
</div>
</div>
</form>
<script src="../login/js/login.js"></script>
</body>
</html>