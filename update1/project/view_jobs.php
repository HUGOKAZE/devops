<?php
  include("connect.php");
  $id=$_GET['id'];
  $sql="SELECT * FROM job_post where job_post_id =$id";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  
  $idE=$row['user_id'];
  $entreprise="SELECT * FROM user where user_id=$idE";
  $en=mysqli_query($conn,$entreprise);
  $row1=mysqli_fetch_assoc($en);
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View jobs Details</title>
    <!-- custom css link.. -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css"/>
</head>
<body>

    <!-- header section is here -->
     <?php
     include ("header.php"); 
     ?>
    <!-- header section is here -->



    <!-- view jobs details start here -->
     <section class="job-details">
        <h1 class="heading">job details </h1>

        <div class="details">
            <div class="job-info">
              <h3><?php echo$row['title']?></h3>
              <a href="view_company.php"><?php echo$row1['name']?></a>
              <p><i class="fas fa-map-marker-alt"></i><?php echo $row['town'].' '.$row['country']?> </p>
            </div>

            <div class="basic-details">
                <h3>salary</h3>
                <p><?php echo $row['salary_range']?>  per month</p>
                <p>work from home, health insurance</p>
                <h3>job type</h3>
                <p>part-time</p>
                <h3>schedule</h3>
                <p>day-shift</p>
            </div>

            <ul>
                <h3>requirement</h3>
                <li>education: <span>graduate</span></li>
                <li>age: <span>25+</span></li>
                <li>language: <span>englishe, french</span></li>
                <li>experince: <span>3+ years</span></li>
            </ul>

            <ul>
                <h3>qualifications</h3>
                <li>Bachelor's (preferred)</li>
                <li>PHP: 1 year (preferred)</li>
                <li>web design: 1 year (preferred)</li>
                <li>WordPress: 1 year (preferred)</li>
                <li>total work : 3 years (required)</li>
            </ul>

            <ul>
                <h3>skills</h3>
                <li>html5 and css3</li>
                <li>javascript</li>
                <li>node.js</li>
                <li>react.js</li>
                <li>php</li>
                <li>mysql</li>
            </ul>

            <div class="description">
                <h3>job description </h3>
                <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis esse et, consequatur obcaecati odio facilis placeat consequuntur aut est, rerum utDolor, </p>

                <ul>
                    <li>Hiring 2 candidate for this role</li>
                    <li>posted 2 days ago</li>
                </ul>
            </div>

            <form action="" method="post" class="flex-btn">
                <?php if(isset($_SESSION['user_id'])){    ?> 
                    <a href="apply.php?id=<?php echo$id?>"type="submit" value="apply now" id="apply" name="apply" class="btn">apply Now</a>
                    <?php }else{
                        ?>
                         <a href="login.php?"type="submit" value="apply now" id="apply" name="apply" class="btn">apply Now</a>
                        <?php }?>
            
                <button type="submit" class="btn"><i class="bx bxs-heart"></i><span>save job</span></button>
            </form>
        </div>  <br><br>
     </section>

    <!-- view jobs details end here -->


    <!-- footer section -->
    <?php
     include ("footer.php"); 
    ?>
    <!-- footer section -->


    <!-- ____custom js file link_____ -->
     <script src="assets/js/script.js"></script>
    
</body>
</html>