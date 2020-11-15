<?php // Register
$account = [
    "username" => $_POST["registerUser"],
    "password" => crypt($_POST["registerPassword"]),
];
if (isset($_POST["registerUser"]) && isset($_POST["registerPassword"]) && isset($_POST["registerRepeat"])) {
    // array_push(database, $account);
    // file_put_contents('', json_encode(database));
    // header("Location:");
}
require 'error.php';
