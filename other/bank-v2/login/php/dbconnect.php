<?php
$servername = "localhost";
$database = "u632487067_ddapi_prod";
$username = "u632487067_admin_prod";
$password = "Prodtheone1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>