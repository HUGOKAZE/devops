<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- custom css link.. -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>
</head>
<body>

    <!-- header section is here -->
     <?php
     include ("header.php"); 
     ?>
    <!-- header section is here -->

    <!-- start of first section -->

    <div class="slider-wrapper">
        <div class="slide">
           <div class="container">
              <div class="row">
                  <div class="col">
                        <h1>Job Seekers and <br> Employers connected</h1>
                        <p>This web application facilitates 
                            seamless <br> connection between job seekers <br> and employer. Job seekers can 
                            easily apply for jobs, <br> and employers can effortllessly post job listings.
                        </p>

                        <a href="register.php" class="btn">Register as candidate</a>
                        <a href="form.php" class="btn">Register as Employer</a>
                  </div>
              </div>
           </div>
        </div>
    </div>

    <!-- end of first section -->



    <!-- home section stars here!! -->

    <div class="home-container">
        <div class="home">
            <form action="search.php" method="GET">
                <h3>find your next job</h3>
                <p>job title <span>*</span></p>
                <input type="text" name="title" placeholder="keyword, category or company" required maxlength="20" class="input">

                <p> job location</p>
                <input type="text" name="location" placeholder="city, town or country" required maxlength="20" class="input">

                <input type="submit" value="search job" name="submit" class="btn">
            </form>
        </div>
    </div>

    <!-- home section ends here!! -->


    <!-- category section start -->

    <section class="category">
        <h1 class="heading">job categories</h1>

        <div class="box-container">
            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Development</h3>
                    <span>2200 jobs</span>
                </div>
            </a>

            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Designer</h3>
                    <span>500 jobs</span>
                </div>
            </a>

            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Teacher</h3>
                    <span>500 jobs</span>
                </div>
            </a>

            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Marketing</h3>
                    <span>1200 jobs</span>
                </div>
            </a>

            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Services</h3>
                    <span>3100 jobs</span>
                </div>
            </a>

            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Enginerr</h3>
                    <span>400 jobs</span>
                </div>
            </a>

            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Finance</h3>
                    <span>1000 jobs</span>
                </div>
            </a>

            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Labour</h3>
                    <span>4000 jobs</span>
                </div>
            </a>
        </div>
    </section>

    <!-- category section ends -->

    <!-- job section start here!! -->

    <section class="jobs-container">
        <h1 class="heading">Latest jobs</h1>

        <div class="box-container">
            <div class="box">
                <div class="company">
                    <img src="images/html.png.png" alt="">
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
                    <button type="submit" class="bx bxs-heart" name="save"></button>
                </div>
            </div>

            <div class="box">
                <div class="company">
                    <img src="images/food.png.jpg" alt="">
                    <div>
                        <h3>IT infosys co.</h3>
                        <p>4 days ago</p>
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
                    <button type="submit" class="bx bxs-heart" name="save"></button>
                </div>
            </div>

            <div class="box">
                <div class="company">
                    <img src="images/gb.png.png" alt="">
                    <div>
                        <h3>IT infosys co.</h3>
                        <p>10 days ago</p>
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
                    <button type="submit" class="bx bxs-heart" name="save"></button>
                </div>
            </div>

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
                    <button type="submit" class="bx bxs-heart" name="save"></button>
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
                    <button type="submit" class="bx bxs-heart" name="save"></button>
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
                    <button type="submit" class="bx bxs-heart" name="save"></button>
                </div>
            </div>

        </div>

        <div style="text-align: center; margin-top: 4rem;">
            <a href="jobs.php" class="btn">View all</a>
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