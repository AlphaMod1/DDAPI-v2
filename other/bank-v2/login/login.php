<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form.css">
    <title>Document</title>
</head>

<body>
    <div class="login">
        <form action="" method="POST">
            <p>Log in:</p>
            <input type="text" id="name" name="user" placeholder="Username">
            <input type="text" id="password" name="password" placeholder="password">
        </form>
        <button class="register-btn">Don't have an account?</button>
    </div>
    <div class="register">
        <form action="" method="POST">
            <p>Register: </p>
            <input type="text" placeholder="Username" name="registerUser">
            <input type="text" placeholder="Password" name="registerPassword">
            <input type="text" placeholder="Repeat" name="registerRepeat">
        </form>
        <button class="login-btn">Already have an account?</button>
    </div>
    <?php // Register
    $account = [
        "username" => $_POST["registerUser"],
        "password" => crypt($_POST["registerPassword"])
    ];
    if(isset($_POST["registerUser"]) && isset($_POST["registerPassword"]) && isset($_POST["registerRepeat"])){
        // array_push(database, $account);
        // file_put_contents('', json_encode(database));
        // header("Location:");
    }
    ?>
    <?php // Login
    if(isset($_POST["user"]) && isset($_POST["password"])){
        for($i = 0 ; $i < count(database); $i++){
            if(database[$i]["username"] == $_POST["user"] && database[$i]["password"] == $_POST["password"]){
                echo "logged in";
            }
        }
    }
    ?>
    <script src="./js/login.js"></script>
</body>

</html>