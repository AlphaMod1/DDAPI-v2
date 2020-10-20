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

	<div class="form-item">
		<input type="text" name="username" class="form-style" placeholder="username" autocomplete="off"/>
	</div>
	<div class="form-item">
		<input type="password" name="password"  placeholder="password" class="form-style" />	
	</div>
	<a href="#" style = "display:block" class="forgot-password">Forgot Password?</a>
	<a href="register.php">Register</a>
	<div class="form-item">
		<input type="submit" class="login pull-right" value="Log In">
		<div class="clear-fix"></div>
	</div>
</div>
</div>
</form>

<?php
$data = json_decode(file_get_contents('./json/accounts.json'), true);
foreach($data["accounts"] as $key => $value){
	if($_POST["username"] == $value["username"] && $_POST["password"] == $value["password"]){
		//Log In
		echo "Logged in";
	}
}
?>
<script src="../login/js/login.js"></script>
</body>
</html>