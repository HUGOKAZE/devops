
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function clean_input($data) {
        return htmlspecialchars(strip_tags(trim($data)));
    }

    $name = clean_input($_POST["name"]);
    $surname = clean_input($_POST["s_name"]);
    $email = filter_var(clean_input($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $gender = clean_input($_POST["gender"]);
    $password = clean_input($_POST["password"]);
    $confirm_password = clean_input($_POST["c_pass"]);
    $dob = clean_input($_POST["dob"]);
    $mobile = clean_input($_POST["number"]);

    // Server-side validation
    if (empty($name) || empty($surname) || empty($email) || empty($gender) || empty($password) || empty($confirm_password) || empty($dob) || empty($mobile)) {
        die("All fields are required.");
    }

    if (!preg_match("/^[a-zA-Z]+$/", $name) || !preg_match("/^[a-zA-Z]+$/", $surname)) {
        die("Name and surname should only contain letters.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    if (strlen($password) < 8) {
        die("Password must be at least 8 characters long.");
    }

    if (!preg_match("/^\d{9}$/", $mobile)) {
        die("Mobile number must be exactly 9 digits.");
    }

    // Hash password before storing it
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    // Database connection (Replace with your actual database credentials)
    $conn = new mysqli("localhost", "root", "", "job");

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // Prepared statement to prevent SQL Injection
    $sql="INSERT INTO User(name, second_name, email, gender, password, date_of_b, phone)
     VALUE('$name', '$surname', '$email', '$gender', '$hashedPassword', '$dob', '$mobile')";
     
     $query = mysqli_query($conn, $sql);

    if ($sql) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql;
    }

}
?>
<?php
// include("connect.php");

// if(isset($_POST["submit"])){
//     $name = $_POST["name"];
//     $second_name = $_POST["s_name"];
//     $email = $_POST["email"];
//     $gender = $_POST["gender"];
//     $password = $_POST["password"];
//     $date_of_birth = $_POST["dob"];
//     $p_number = $_POST["number"];

//     $sql="INSERT INTO User(name, second_name, email, gender, password, date_of_b, phone)
//      VALUE('$name', '$second_name', '$email', '$gender', '$password', '$date_of_birth', '$p_number')";
     
//      $query = mysqli_query($conn, $sql);
// }

//?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- custom css link.. -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>
    <script>
         function validateForm() {
            let name = document.forms["secureForm"]["name"].value.trim();
            let surname = document.forms["secureForm"]["s_name"].value.trim();
            let email = document.forms["secureForm"]["email"].value.trim();
            let gender = document.forms["secureForm"]["gender"].value;
            let password = document.forms["secureForm"]["password"].value.trim();
            let confirmPassword = document.forms["secureForm"]["c_pass"].value.trim();
            let dob = document.forms["secureForm"]["dob"].value; 
            let mobile = document.forms["secureForm"]["number"].value.trim();

            if (name === "" || surname === "" || email === "" || gender === "" || password === "" || confirmPassword === "" || dob === "" || mobile === "") {
                alert("All fields are required.");
                return false;
            }

            if (!/^[a-zA-Z]+$/.test(name) || !/^[a-zA-Z]+$/.test(surname)) {
                alert("Name and Surname should contain only letters.");
                return false;
            }

            if (!/^\d{9}$/.test(mobile)) {
                alert("Mobile number must be exactly 9 digits.");
                return false;
            }

            if (password.length < 8) {
                alert("Password must be at least 8 characters long.");
                return false;
            }

            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

    <!-- header section is here -->
     <?php
     include ("header.php"); 
     ?>
    <!-- header section is here -->


    <!-- login section stars here! -->

     <div class="account-form-container">
        <section class="account-form">
            <form action="" method="POST" name="secureForm">
                <h3>Candidate Register Now!</h3>
                <input type="text" required name="name" maxlength="70" placeholder="enter your name" class="input">

                <input type="text" required name="s_name" maxlength="70" placeholder="enter your second name" class="input">


                <input type="email" required name="email" maxlength="50" placeholder="enter your email" class="input">

                <input type="text" required name="gender" maxlength="10" placeholder="enter your gender" class="input">


                <input type="password" required name="password" maxlength="20" placeholder="enter your password" class="input">


                <input type="password" required name="c_pass" maxlength="20" placeholder="confirm your password" class="input">

                <input type="date" required name="dob" maxlength="70" placeholder="enter birth date" class="input">

                <input type="number" required name="number" maxlength="70" placeholder="enter mobile number" class="input">



                <p>already have an account? <a href="login.php">Login now</a></p>
                <input type="submit" value="register now" name="submit" class="btn">
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