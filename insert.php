<?php
include 'connection.php';
session_start();
$obj = new crud();
$obj->insert();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='style.css' rel='stylesheet'>

</head>
<body>
    <h1>Insert Details</h1>
    <form action="" method="post">
        <input type="text" name='name' placeholder='Task'><br>
        <input type="text" name='des' placeholder='Description'><br>
        <input type="submit" name='sbt' value='Submit'>
    </form>
</body>
</html>