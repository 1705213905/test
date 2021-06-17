<?php
include("connection.php");
error_reporting(0);
?>


<html>
 
      <form action="" method="GET">
      <label for="id">Id:</label>
      <input type="id" name="id" value="" required/><br><br>
      <label for="rollno">Roll No:</label>
      <input type="rollno" name="rollno" value="" required/><br><br>
      <label for="name">Name:</label>
      <input type="text" name="name" value="" required/><br><br>
       <label for="address">Address:</label>
      <input type="text" name="address" value="" required/><br><br>
      <input type="submit" value="Submit">
     

      </form>
      
 <?php
 
 
     $id = $_GET['id'];
     $rollno = $_GET['rollno'];
     $name = $_GET['name'];
     $address = $_GET['address'];

        $query = "INSERT INTO STUDENT VALUES ('$id','$rollno','$name','$address')";
        $data = mysqli_query($conn, $query);
        
        if($data)
        {
            echo "Data inserted into Database";
        }
    
    else{
            echo "All fields are required";
    }


?>

       </body>
    </html>