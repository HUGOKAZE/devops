

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- custom css link.. -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>
</head>
<body>

    <!-- header section is here -->
     <?php
     include ("header.php"); 
     ?>
     <?php 
     
include("connect.php");
   if (isset($_POST["submit"])) {
  
    $email=$_POST['email'];
    $hashedPassword=$_POST['password'];
    $sql="SELECT * FROM User where email='$email' AND password ='$hashedPassword'";
    $result=mysqli_query($conn, $sql);
    if ($result) {
        if ($row=mysqli_fetch_assoc($result)) {
            
            $_SESSION["name"] = $row["name"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["user_id"] = $row['user_id'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['image']=$row['image'];
            
            
            if ($row['role']=='candidate') {
                header('location:home.php');
            }else if ($row['role']=='employer') {
                header("location:Admin/index.php");
            }
            else {
                header("location: big_user/index.php");
            }
            # code...
        }
      
    }
   }


?>
    <!-- header section is here -->



    <!-- login section stars here! -->

    <div class="account-form-container">
        <section class="account-form">
            <form action="" method="POST">
                <h3>Welcome back!</h3>
                <input type="text" required name="email" maxlength="50" placeholder="enter your email" class="input">

                <input type="password" required name="password" maxlength="20" placeholder="enter your password" class="input">

                <p>don't have an account? <a href="register.php">register now</a></p>
                <input type="submit" value="login now" name="submit" class="btn">
            </form>
        </section>
    </div>

    <!-- login section ends here! -->





    <!-- footer section -->
    <?php
     include ("footer.php"); 
    ?>
    <!-- footer section -->


    <!-- ____custom js file link_____ -->
     <script src="assets/js/script.js"></script>
    
</body>
</html>