<?php
include("connection.php");
error_reporting(0);
     $_GET['id'];
     $_GET['rollno'];
     $_GET['name'];
     $_GET['address'];
?>


<html>
 <head>
   </head>
      <form action="" method="GET">
      ID<input type="text" name="id" value=""/><br><br>
      Roll no<input type="text" name="rollno" value=""/><br><br>
      Name<input type="text" name="name" value=""/><br><br>
      Address<input type="text" name="address" value=""/><br><br>
      <input type="submit" name="submit" value="Update"/><br><br>

      </form>
 <?php
 if($_GET['submit'])
{
     $id = $_GET['id'];
     $rollno = $_GET['rollno'];
     $name = $_GET['name'];
     $address = $_GET['address'];

     $query = "UPDATE STUDENT SET ROLLNO='$rollno',NAME='$name',ADDRESS='$address' WHERE ID='$id'";
     $data = mysqli_query($conn, $query);
      if($data)
      {
           echo "Record updated Successfully.<a href='display.php'>check updated list</a>";

      }else{
           echo "Record Not Updated";
      }
}


?>

       </body>
        </html>