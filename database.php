<?php
$host="localhost";
$user="root"; // mention your user account;
$password="Yourpassword"; //mention your password
$database="myfirstdb";

// object oriented way

//$connect=new mysqli($host,$user,$password,$database);
//if($connect->error)
//die("Failed to connect with database");
//echo "Database connected!";
//$connect->close();

// Procedual way
$connect=mysqli_connect($host,$user,$password,$database);
if(!$connect)
die("Failed to connect");
echo "Database connected";
mysqli_close($connect);
?>



