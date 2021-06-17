<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "almighty";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Connection Ok";
}
else
{
    die("Connection failed becouse ".mysqli_connect_error());
}
?>