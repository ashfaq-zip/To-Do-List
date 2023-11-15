<?php
session_start();
include 'header.php';
if (isset($_SESSION['ID'])) {
    header("Location:home.php");
    exit();
}
include "connection.php";
$obj = new crud();

if(isset($_REQUEST['sbt'])){
    $obj->login();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='style.css' rel='stylesheet'>
</head>
<body>
    <div class="content">
        <h1> &nbsp;  &nbsp; Login!</h1>
        <form action="" method="POST">
            <input type="text" name="e" placeholder="Email/Mobile"><br>
            <input type="password" name="p" placeholder="Password"><br>
            <input type="submit" name="sbt" value="Login">
        </form>
        <h4>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  or, You can <a href="registration.php">Register</a> yourself!</h4>
    </div>
</body>
</html>