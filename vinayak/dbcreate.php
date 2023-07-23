<?php
 $host='localhost';
 $username='root';
 $password='';

 $conn= mysqli_connect($host,$username,$password);

 if(!$conn)
 {
   die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS hotel";
$result=mysqli_query($conn,$sql);




 mysqli_close($conn);

?>