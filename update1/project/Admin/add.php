<?php 
session_start();
$localhost="localhost";
$dbuser="root";
$dbname="job";
$dbpassword="";
$conn=mysqli_connect($localhost,$dbuser,$dbpassword,$dbname);
$id=$_SESSION["user_id"];

   $title=$_POST['title'];
   $qua=$_POST['Qualification'];
   $salary=$_POST['salary'];
   $part_time=$_POST['part_time'];
   $day=$_POST['day'];
   $country=$_POST['country'];
   $skill=$_POST['skill'];
   $town=$_POST['town'];
   $Description=$_POST['Description'];
   $Requirement=$_POST['Requirement'];
   echo$Requirement;
   $sql="INSERT INTO job_post(user_id,title,description,requirement,qualification,salary_range,part_time,day_shift,skills,town,country)
   VALUES($id,'$title','$Description','$Requirement','$qua',$salary,'$part_time','$day','$skill','$town','$country')";
   $tre=mysqli_query($conn,$sql);
    if ($tre) {
      header("location:list_of_job.php");
    }
    else {
      echo"echec";
    }
   
   

?>