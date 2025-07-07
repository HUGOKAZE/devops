<?php
$localhost="localhost";
$user="root";
$pass="";
$dbname="job";
$conn=mysqli_connect($localhost,$user,$pass,$dbname);

$id=$_GET['id'];
  $sql=mysqli_query($conn,"DELETE FROM user where user_id=$id");
  if ($sql) {
    header("location:index.php");
  }
?>