<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Company</title>
    <!-- custom css link.. -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>
</head>
<body>

    <!-- header section is here -->
     <?php
     include ("header.php"); 
     ?>
    <!-- header section is here -->


    <!-- company details section stars here -->

    <section class="view-company">
        <h1 class="heading">company details</h1>

        <div class="details">
            <div class="info">
                <img src="images/html.png.png" alt="">
                <h3>IT infosys co.</h3>
                <p><i class="fas fa-map-marker-alt"></i>Doual, Cameroon</p>
            </div>

            <div class="description">
                <h3>about company</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta tempora unde veritatis inventore laborum, rerum omnis dolor impedit eos placeat architecto nisi cum laudantium, atque voluptatem</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius porro voluptate consequuntur aspernatur adipisci laborum delectus praesentium sequi!</p>
            </div>

            <ul>
                <li>3 jobs posted</li>
                <li>established at 21-05-2004</li>
                <li>253 working employees</li>
            </ul>
        </div>
    </section>

    <!-- company details section ends here -->


    
    <!-- job section start here!! -->

    <section class="jobs-container">
        <h1 class="heading">jobs they offer</h1>

        <div class="box-container">
            <div class="box">
                <div class="company">
                    <img src="images/java.png.png" alt="">
                    <div>
                        <h3>IT infosys co.</h3>
                        <p>2 days ago</p>
                    </div>
                </div>
                <h3 class="job-title">senoir web developer</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i><span>Douala, Cameroon</span></p>
                <div class="tags">
                    <p><i class="fas fa-indian-rupee-sign"></i><span>10K - 25K</span></p>
                    <p><i class="fas fa-briefcase"></i><span>part-time</span></p>
                    <p><i class="fas fa-clock"></i><span>day-shift</span></p>
                </div>

                <div class="flex-btn">
                    <a href="view_jobs.php" class="btn">View details</a>
                    <button type="submit" class="fas fa-clock" name="save"></button>
                </div>
            </div>

            <div class="box">
                <div class="company">
                    <img src="images/js.png.png" alt="">
                    <div>
                        <h3>IT infosys co.</h3>
                        <p>7 days ago</p>
                    </div>
                </div>
                <h3 class="job-title">senoir web developer</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i><span>Douala, Cameroon</span></p>
                <div class="tags">
                    <p><i class="fas fa-indian-rupee-sign"></i><span>10K - 25K</span></p>
                    <p><i class="fas fa-briefcase"></i><span>part-time</span></p>
                    <p><i class="fas fa-clock"></i><span>day-shift</span></p>
                </div>

                <div class="flex-btn">
                    <a href="view_jobs.php" class="btn">View details</a>
                    <button type="submit" class="fas fa-clock" name="save"></button>
                </div>
            </div>

            <div class="box">
                <div class="company">
                    <img src="images/php.png.png" alt="">
                    <div>
                        <h3>IT infosys co.</h3>
                        <p>2 days ago</p>
                    </div>
                </div>
                <h3 class="job-title">senoir web developer</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i><span>Douala, Cameroon</span></p>
                <div class="tags">
                    <p><i class="fas fa-indian-rupee-sign"></i><span>10K - 25K</span></p>
                    <p><i class="fas fa-briefcase"></i><span>part-time</span></p>
                    <p><i class="fas fa-clock"></i><span>day-shift</span></p>
                </div>

                <div class="flex-btn">
                    <a href="view_jobs.php" class="btn">View details</a>
                    <button type="submit" class="fas fa-clock" name="save"></button>
                </div>
            </div>

        </div>

    </section>

    <!-- job section ends here!! -->




    <!-- footer section -->
    <?php
     include ("footer.php"); 
    ?>
    <!-- footer section -->


    <!-- ____custom js file link_____ -->
     <script src="assets/js/script.js"></script>
    
</body>
</html>