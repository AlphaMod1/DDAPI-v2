<?php // Login
if (isset($_POST["user"]) && isset($_POST["password"])) {
    for ($i = 0; $i < count(database); $i++) {
        if (database[$i]["username"] == $_POST["user"] && database[$i]["password"] == $_POST["password"]) {
            echo "welcome " . $_POST["user"];
            $loggedin = true;
            die();
        }
    }
}
require 'error.php';
