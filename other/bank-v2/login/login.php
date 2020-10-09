<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>
<div id="formWrapper">

<div id="form">
<div class="logo">
<a href="./index.html"><img src="../homepage/img/logov2.png" alt="Logo"></a>
</div>
		<div class="form-item">
			<p class="formLabel">username</p>
			<input type="text" name="email" id="email" class="form-style" autocomplete="off"/>
		</div>
		<div class="form-item">
			<p class="formLabel">Password</p>
			<input type="password" name="password" id="password" class="form-style" />
			<!-- <div class="pw-view"><i class="fa fa-eye"></i></div> -->
			<p><a href="#" ><small>Forgot Password ?</small></a></p>	
		</div>
		<div class="form-item">
		<p class="pull-left"><a href="register.php"><small>Register</small></a></p>
		<input type="submit" class="login pull-right" value="Log In">
		<div class="clear-fix"></div>
        </div>
    </div>
</div>
<script src="../login/js/login.js"></script>
</body>
</html>