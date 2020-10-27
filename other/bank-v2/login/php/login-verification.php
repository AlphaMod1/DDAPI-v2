<?php
include("error.php");
foreach($data["accounts"] as $key => $value){
	if($_POST["username"] == $value["username"] && $_POST["password"] == $value["password"]){
        //Log In
        session_start();
        $_SESSION["loggedin"] = true;
        header("Location:http://localhost/DDAPI-v2/other/bank-v2/index.php?user=$_POST[username]");
        exit;
        }
}
?>