<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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


    <!-- contact us section starys here! -->

    <div class="section-title">contact us</div>

    <section class="contact">
        <div class="box-container">
    
            <div class="box">
                <i class="fas fa-phone"></i>
                <a href="tel:650 40 84 47">650 40 84 47</a>
                <a href="tel:693 75 56 72">693 75 56 72</a>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <a href="mailto:maximengomse@50gmail.com">maximengomse@50gmail.com</a>
                <a href="mailto:mayclaysal@gmail.com">mayclaysal@gmail.com</a>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <a href="#">POBox 1234. building 128 Bonanjo, Douala, Cameroon</a>
            </div>


        </div>

        <form action="" method="post">
            <p>drop your message</p>
            <div class="flex">
                <div class="box">
                    <p>name <span>*</span></p>
                    <input type="text" name="name" required maxlength="20" placeholder="enter your name" class="input">
                </div>

                <div class="box">
                    <p>email <span>*</span></p>
                    <input type="email" name="email" required maxlength="20" placeholder="enter your email" class="input">
                </div>

                <div class="box">
                    <p>number <span>*</span></p>
                    <input type="number" name="number" required min="0" max="999999999" maxlength="20" placeholder="enter your number" class="input">
                </div>

                <div class="box">
                    <p>role <span>*</span></p>
                    <select name="role" id="" required class="input">
                        <option value="employee">job seeker(employee)</option>
                        <option value="employer">Job provider(employer)</option>
                    </select>
                </div>  
            </div>

            <p>message <span>*</span></p>
            <textarea name="message" class="input" required maxlength="70" placeholder="enter your message" col="30" rows="10"></textarea>
            
            <input type="submit" value="send message" name="send" class="btn">
        </form>
    </section>

    <!-- contact us section ends here! -->


    <!-- footer section -->
    <?php
     include ("footer.php"); 
    ?>
    <!-- footer section -->


    <!-- ____custom js file link_____ -->
     <script src="assets/js/script.js"></script>
    
</body>
</html>