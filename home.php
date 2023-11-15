<?php
session_start();
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='style.css' rel='stylesheet'>
    <title>Task Manager</title>
</head>
<body>
    <?php if(isset($_SESSION['NAME'])){ ?>
        <h1>Welcome back, <?php echo $_SESSION['NAME']; ?>!</h1>
        <h3><a href="View.php">My Tasks</a></h3><br/><br/>
        <h3><a href="insert.php">Add new tasks</a></h3><br/><br/>
        <h3><a href="logout.php">Log out</a></h3><br/><br/>
    <?php } 
    else {?>
        <h2>Not register already!, Now you can</h2>
        <h3><a href="registration.php">Register</a></h3><br/><br/>

        <h2>If you are registered already, you can</h2>
        <h3><a href="login.php">Log in</a></h3><br/><br/>
    <?php } ?>


</body>
</html>