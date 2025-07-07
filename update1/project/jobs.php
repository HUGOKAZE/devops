<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> All jobs</title>
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


    <!-- job filter section starts here -->

    <section class="job-filter">
        <h1 class="heading">filter jobs</h1>

        <form action="" method="post">
            <div class="flex">
                <div class="box">
                    <p>job title <span>*</span></p>
                    <input type="text" name="title" placeholder="keyword, category or company" required maxlength="20" class="input">
                </div>

                <div class="box">
                    <p>job location</p>
                    <input type="text" name="location" placeholder="city, town or country" required maxlength="20" class="input">
                </div>
            </div>

            <div class="dropdown-container">
                <div class="dropdown">
                    <input type="text" readonly placeholder="date posted" name="date" maxlength="20" class="output">

                    <div class="list">
                        <p class="items">today</p>
                        <p class="items">3 days ago</p>
                        <p class="items">7 days ago</p>
                        <p class="items">10 days ago</p>
                        <p class="items">15 days ago</p>
                        <p class="items">30 days ago</p>
                    </div>
                </div>

                <div class="dropdown">
                    <input type="text" readonly placeholder="estimated salary" name="date" maxlength="20" class="output">

                    <div class="list">
                        <p class="items">1k or less</p>
                        <p class="items">1k - 5k</p>
                        <p class="items">5k - 10k</p>
                        <p class="items">10k - 20k</p>
                        <p class="items">20k - 30k</p>
                        <p class="items">30k - 40k</p>
                        <p class="items">40k - k50</p>
                        <p class="items">50k - 1 lakh</p>
                        <p class="items">1 lakh - 5 lakh</p>
                        <p class="items">5 lakh - 10 lakh</p>
                        <p class="items">10 lakh - 20 lakh</p>
                        <p class="items">20 lakh - 50 lakh</p>
                        <p class="items">50 lakh - 1core</p>
                        <p class="items">1 core - 5 core</p>
                        <p class="items">5 core - 10 core</p>
                        <p class="items">10 core or more</p>
                    </div>
                </div>

                <div class="dropdown">
                    <input type="text" readonly placeholder="job type" name="date" maxlength="20" class="output">

                    <div class="list">
                        <p class="items">full-time</p>
                        <p class="items">part-time</p>
                        <p class="items">intership</p>
                        <p class="items">contract</p>
                        <p class="items">temporary</p>
                        <p class="items">fresher</p>
                    </div>
                </div>

                <div class="dropdown">
                    <input type="text" readonly placeholder="education level" name="date" maxlength="20" class="output">

                    <div class="list">
                        <p class="items">10th pass</p>
                        <p class="items">12th pass</p>
                        <p class="items">bachlelors's degree</p>
                        <p class="items">master's degree</p>
                        <p class="items">diploma</p>
                    </div>
                </div>

                <div class="dropdown">
                    <input type="text" readonly placeholder="work shift" name="date" maxlength="20" class="output">

                    <div class="list">
                        <p class="items">day shift</p>
                        <p class="items">night shift</p>
                        <p class="items">flexible shift</p>
                        <p class="items">fixed shift</p>
                    </div>
                </div>

            </div>
        </form>
    </section>

    <!-- job filter section ends here!! -->


    <!-- all jobs are found here.. -->

    <section class="jobs-container">
        <h1 class="heading">all jobs</h1>

        <div class="box-container">
        <?php
            include("connect.php");
            $sql =" SELECT * FROM job_post";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $jobid=$row['user_id'];

                $imager="SELECT * FROM user where user_id=$jobid";
                $rt=mysqli_query($conn,$imager);
                $row1=mysqli_fetch_assoc($rt);
                $imageE=$row1['image'];
                $nameE=$row1['name']
                

        
            ?>
            <div class="box">
            
                <div class="company">
                
                    <img src="./<?php echo $imageE?>" alt="">

                    <div>
                        
                        <h3><?php echo $nameE?></h3>
                        <p>2 days ago</p>
                    </div>
                </div>
                <h3 class="job-title"><?php echo $row['title']?></h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i><span><?php echo $row['town']?>, <?php echo $row['country']?></span></p>
                <p><?php echo$row['qualification']?></p>
               
                <div class="tags">
                    <p><i class="fas fa-indian-rupee-sign"></i><span><?php echo $row['salary_range']?></span></p>
                    <p><i class="fas fa-briefcase"></i><span><?php echo $row['part_time']?></span></p>
                    <p><i class="fas fa-clock"></i><span><?php echo $row['day_shift']?></span></p>
                </div>

                <div class="flex-btn">
                    <a href="view_jobs.php?id=<?php echo$row['job_post_id']?>" class="btn">View details</a>
                    <button type="submit" class="bx bxs-heart" name="save"></button>
                </div>
              
            </div>

               
            <?php
                    }
                
                ?>
                
        </div>

    </section>

    <!-- end of all jobs here!... -->





    <!-- footer section -->
    <?php
     include ("footer.php"); 
    ?>
    <!-- footer section -->


    <!-- ____custom js file link_____ -->
     <script src="assets/js/script.js"></script>

     <script>
        let dropdown_items = document.querySelectorAll('.job-filter form .dropdown-container .dropdown .list .items');

        dropdown_items.forEach(items =>{
            items.onclick = () =>{
                items_parent = items.parentElement.parentElement;
                let output = items_parent.querySelector('.output');
                output.value = items.innerText;
            }
        });
     </script>
    
</body>
</html>