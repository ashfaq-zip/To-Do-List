<?php
include "connection.php";
include 'header.php';
$obj = new crud();
$obj->register();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightblue;
            text-align: center;
        }

        h1 {
            color: rgb(1, 34, 61);
            margin-bottom: 20px;
        }

        form { 
            width: 300px; 
            margin: 0 auto; 
        } 

        form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: lightgrey;
            color: black;
            font-size: 16px;
        }

        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: rgb(1, 34, 61);
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #126cdb;
        }

        button {
            width: 300px;
            padding: 10px;
            margin: 0 auto;
            border: none;
            border-radius: 5px;
            background-color: darkgreen;
            color: white;
            font-size: 16px;
            cursor: pointer;
            display: block;
        }
        button:hover { 
            background-color: #15bf42; 
        } 
    </style>
</head>
<body>
    <h1> &nbsp; Register Yourself!</h1>
    <form action="" method="POST">
        <input type="text" name="n" placeholder="Name"><br>
        <input type="email" name="e" placeholder="Email"><br>
        <input type="number" name="m" placeholder="Mobile Number"><br>
        <input type="password" name="p" placeholder="Password"><br>
        <input type="submit" value="Register" name='sbt'>
    </form>
    <h4>If already registered, You can <a href="login.php">Login!</a></h4>
    

</body>
</html>
