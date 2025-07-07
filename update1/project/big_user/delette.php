<?php
$localhost="localhost";
$user="root";
$pass="";
$dbname="job";
$conn=mysqli_connect($localhost,$user,$pass,$dbname);

$id=$_GET['id'];
  $sql=mysqli_query($conn,"DELETE FROM job_post where job_post_id=$id");
  if ($sql) {
    header("location:index.php");
  }
?>