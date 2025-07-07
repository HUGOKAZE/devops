<?php
include("connect.php");
session_start();


if(isset($_POST["poster"])) {

    // Supposons que vous avez un user_id provenant de la session ou d'une autre source
    $user_id = $_SESSION['user_id']; // Remplacez cela par le user_id réel

    $job_title = $_POST["title"];
    $salary_range = $_POST["salary"];
    $work_time = $_POST["relation"];
    $work_period = $_POST["period"];
    $requirment = $_POST["requirment"];
    $qualification = $_POST["qualification"];
    $job_description = $_POST["description"];
    $skills = $_POST["skills"];

    // Utilisez des requêtes préparées pour éviter les injections SQL
    $sql = "INSERT INTO job_post (user_id, title, salary_range, part_time, day_shift, requirement, qualification, description, skills)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "issssssss", $user_id, $job_title, $salary_range, $work_time, $work_period, $requirment, $qualification, $job_description, $skills);

        if(mysqli_stmt_execute($stmt)){
            echo "succès";
        } else {
            echo "Erreur : " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Erreur lors de la préparation de la requête : " . mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <style>
        #a1{
            margin-left: 300px;
            padding: 16px;
        }
    </style>
</head>
<body>

     
      <section  class="contact"id="a1">
          <div class="heading">Employer enter all information about the job here!</div>

          <form action="post.php" method="POST">
              <div class="flex">
                
              <div class="box">
                      <p>job title <span>*</span></p>
                      <input type="text" name="title" required maxlength="40" placeholder="enter salary range" class="input">
                  </div>

                  <div class="box">
                      <p>salary Range <span>*</span></p>
                      <input type="text" name="salary" required maxlength="40" placeholder="enter salary range" class="input">
                  </div>

                  <div class="box">
                    <p>work time <span>*</span></p>
                    <input type="text" name="relation" required  placeholder="enter work relatioship" class="input">
                  </div>

                  <div class="box">
                      <p>work period <span>*</span></p>
                      <input type="text" name="period" required placeholder="enter working period" class="input">
                  </div>  
              </div>

              <p>Requirements <span>*</span></p>
              <textarea name="requirment" class="input" required maxlength="90" placeholder="enter your message" col="30" rows="10"></textarea>

              <p>Qualifications <span>*</span></p>
              <textarea name="qualification" class="input" required maxlength="90" placeholder="enter your message" col="30" rows="10"></textarea>

              <p>Job descripetion <span>*</span></p>
              <textarea  class="input" name="description" required maxlength="90" placeholder="enter your message" col="30" rows="10"></textarea>

              <p>Skills <span>*</span></p>
              <textarea  class="input" name="skills" required maxlength="90" placeholder="enter your message" col="30" rows="10"></textarea>
            
              <input type="submit" value="post" name="poster" class="btn">
          </form>
      </section>

    
</body>
</html>