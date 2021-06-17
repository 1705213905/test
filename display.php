<style>
td{
    padding:18px;
}

</style>


<?php
 include("connection.php");
 $query ="SELECT * FROM STUDENT";
 $data = mysqli_query($conn, $query);
 $total = mysqli_num_rows($data);

 //mysqli_fetch_assoc -->used for the display the content
 $result = mysqli_fetch_assoc($data);

 
 
 if($total != 0)
 {
     ?>
     <table>
      <tr>
        <th>Id</th>
        <th>Roll No</th>
        <th>Name</th>
        <th>Address</th>
        <th colspan="4">Operations</th>
    </tr>

     <?php
     while($result = mysqli_fetch_assoc($data))
     {
         echo "<tr>
         <td>".$result['id']."</td>
         <td>".$result['rollno']."</td>
         <td>".$result['name']."</td>
         <td>".$result['address']."</td>
         <td><a href='update.php ?rn=$result[rollno]'>Edit</a></td>
         <td><a href='delete.php ?rn=$result[rollno]' onclick=' return checkdelete()'>Delete</a></td>
         </tr>";
         //here $result[rollno] kewal mouse ko is per le jane per show karayega display per is liye use kr rhe hain.aur rollno ke through identify hoga ki file hai ya delete update ho gyi.

     }
      }
 else{
     echo "No record found";
 }
   //here script used for notification on delete button ki data ko delete krna hai ya nhi.
 ?>
 </table>
 <script>
 function checkdelete()
 {
     return confirm('Are you sure want to delete this data???');
 }</script>




 