<?php

if(!defined('allowed')) {
    die('Direct access not permitted');
 }

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u632487067_admin_stage');
define('DB_PASSWORD', 'Stagetheone1');
define('DB_NAME', 'other_logins_users');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>