<?php
define('allowed', TRUE);
session_start();

require_once "config.php";

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login (Level 1)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo $_SESSION["username"]; ?></b>. Welcome to our site.</h1>
    </div>
    <p class="page-content">
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>


    <?php
    $sql = "SELECT * FROM users";
    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            echo '<table class="table table-hover">';
            echo '<thead class="thead-dark">';
            echo '<tr>';
            echo '<th scope="col">ID</th>';
            echo '<th scope="col">Username</th>';
            echo '<th scope="col">Action</th>';
            echo '</tr></thead><tbody>';
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr id="id-' . $row['id'] . '">';
                echo "<td scope='row'>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td><a class='btn btn-danger btn-sm' href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo '</tr>';
            }
            echo '<tbody><table>';
        }
    }
    mysqli_close($link);
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</body>

</html>