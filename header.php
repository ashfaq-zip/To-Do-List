
<!DOCTYPE html>
<html>
<head>
<style>
  /* Define a header container */
  .header {
    overflow: hidden;
    background-color: rgb(1, 36, 65);
    padding: 20px 10px;
    display: flex;
    justify-content: space-between;
  }

  /* Style the header links */
  .header a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 12px;
    text-decoration: none;
  }

  /* Change the color of links on hover */
  .header a:hover {
    background-color: #ddd;
    color: black;
  }

  /* Style the active/current link */
  .header a.active {
    background-color: dodgerblue;
    color: white;
  }
</style>
</head>
<body>
<?php if(isset($_SESSION['NAME'])){ 
  $name = $_SESSION['NAME'];?>
  <div class="header">
    <a href="home.php">Home</a>

    <a href="view.php"> Hey! <?php echo $name;?></a>
  </div>
<?php }
else{ ?>
  <div class="header">
    <a href="home.php">Home</a>
    <div>
      <a href="login.php">Login</a>
      <a href="registration.php"> Register</a>
    </div>
  </div>
<?php } ?>
</body>
</html>