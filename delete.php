<?php 
include("connection.php");
error_reporting(0);
$rollno = $_GET['rn'];
$query = "DELETE FROM STUDENT WHERE ROLLNO='$rollno'";
$data = mysqli_query($conn, $query);
if($data)
{
   // echo "<font color='green'>Record Deleted from Table";
   //-->yeh use kr sakte hain aur alert msg ke liye dusara script ki help se as follow use kr sakte hain 

   echo "<script>alert('Record Deleted')</script>";
    ?>

<meta http-equiv="refresh" content="0; url=http://localhost:8080/almighty/display.php">


    <?php
}
else
{
    echo "<font color='red'>Sorry, Delete process failed";
}

?>

