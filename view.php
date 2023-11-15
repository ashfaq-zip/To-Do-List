<?php
include 'connection.php';
session_start();
$obj = new crud();
$result = $obj->view();
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Fetch</title>
     <link href='style.css' rel='stylesheet'>
 <style>
     button { 
         background-color: rgb(1, 34, 61);
         color: white;
         padding: 10px 20px;
         border: none;
         cursor: pointer; 
         margin: 10px;
     } 
     button:hover { 
         background-color: #126cdb; 
     } 
     a { 
         color: rgb(1, 34, 61);
         font-weight: bold;
         text-decoration: none; 
     }
     a:hover { 
         color: rgb(132, 187, 232); 
     } 
 </style>
 </head>
 <body>
     <h1>TO DO LIST</h1>
     <div style="display:flex; align-items:center; justify-content:space-between">
     <a href="insert.php"><button name='add'>ADD ITEM</button></a><a href="logout.php"><button>LOGOUT</button></a>
     </div>
 
     <table>
         <tr>
             <th>Task</th>
             <th>Description</th>
             <th colspan="2">Action</th>
         </tr>
         <?php while($res = mysqli_fetch_assoc($result)){ ?>                                                                                                   
         <tr>
             <td><?php echo $res['name']; ?> </td>
             <td><?php echo $res['des']; ?> </td>
             <td><a href='edit.php?id=<?php echo $res['id'];?>'>Edit</a></td>
             <td><a href='delete.php?id=<?php echo $res['id'];?>'>Delete</a></td>
         </tr>
         <?php } ?>
     </table>
 </body>
 </html>