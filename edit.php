<?php
include 'connection.php';
session_start();
$obj = new crud();
if(isset($_SESSION['NAME'])){
    $table = $_SESSION['NAME'];
    include 'header.php';
    $id=$_REQUEST['id'];
    $query = "select * from $table where id = '$id'";
    $res = mysqli_query($obj->conn, $query);
    $obj->edit();
}
else{
    header("location:login.php");
}
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
    <h1>Update Entries</h1>
    <form action="" method="post">
        <?php while($row = mysqli_fetch_assoc($res)){ ?>
            <input type="text" name='name' value="<?php echo $row['name'] ?>">
            <input type="text" name='des' value="<?php echo $row['des'] ?>">
            <input type="submit" name= 'sbt' value='Submit'>
        <?php } ?>
    </form>
</body>
</html>
