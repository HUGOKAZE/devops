<?php 
include("connect.php");

if(isset($_POST["submit"])){
    $full_name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $m_number = $_POST["number"];
    $country = $_POST["country"];
    $town = $_POST["town"];
    $company_type = $_POST["type"];
    $company_num = $_POST["m_num"];

    $image = null;

    // Gestion de l'upload de l'image
    if ($_FILES['image']['size'] > 2 * 1024 * 1024) { // 2MB max
        echo "Fichier trop volumineux.";
        exit;
    }


    if(isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $uploadDir = 'uploads/';
        $filename = uniqid() . '_' . basename($_FILES['image']['name']);
        $photoPath = $uploadDir . $filename ;

        $allowedTypes = ['image/jpeg' ,'image/png' ,'image/gif'] ;

        if(in_array($_FILES['image'] ['type'] , $allowedTypes)) {
            if(move_uploaded_file($_FILES['image'] ['tmp_name'] , $photoPath)) {
                $image = $photoPath;
                // echo "image enregistree avec succes : $photoPath <br>";
            }else{
                echo "erreur lors du deplacement";
            }
        }else{
            echo "format de fichier non supporte" ;
        }

    }else{
        echo "aucune image telechargee";
    }

    
    $sql="INSERT INTO User(name, email, password, phone, image, country, town, company_type, company_num,role)
       VALUE('$full_name', '$email', '$password', '$m_number', '$image', '$country', '$town', '$company_type','$company_num','employer')";
       echo $sql;

     $query = mysqli_query($conn, $sql);

     /*echo $sql;
     if($query){
        echo "sucess";
     }
     else{
        echo "error";
     }*/
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employer form</title>

    <link rel="stylesheet" href="css/fm.css">
</head>
<body>
    

  
<!-- form section stars here! -->

 <div class="container">
        <header>Enter company information</header>

        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="form">
                <div class="details  personal">
                    <span class="title">company details</span>

                    <div class="fields">
                        <div class="input-fields">
                            <label for="">full name</label>
                            <input type="text" placeholder="enter company's name" name="name" required/>
                        </div>

                        <div class="input-fields">
                            <label for="">email</label>
                            <input type="email" placeholder="enter email" name="email" required />
                        </div>

                        <div class="input-fields">
                            <label for="">password</label>
                            <input type="password" placeholder="enter password" name="pass" required />
                        </div>

                        <div class="input-fields">
                            <label for="">Mobile number</label>
                            <input type="number" placeholder="enter mobile number" name="number" required />
                        </div>

                        <div class="input-fields">
                            <label for="">Image</label>
                            <input type="file" accept="image/*" name="image" required />
                        </div>

                    </div>
                </div>

                
                <div class="details  personal">
                    <span class="title">identity details</span>

                    <div class="fields">
                        <div class="input-fields">
                            <label for="">country</label>
                            <input type="text" placeholder="enter your country" name="country" required />
                        </div>

                        <div class="input-fields">
                            <label for="">town</label>
                            <input type="text" placeholder="enter your town" name="town" required />
                        </div>

                        <div class="input-fields">
                            <label for="">Type</label>
                            <input type="text" placeholder="enter company type" name="type" required />
                        </div>

                        <div class="input-fields">
                            <label for="">ID number</label>
                            <input type="text" placeholder="enter company matriculation" name="m_num" required />
                        </div>
                    </div>
                </div>
                
                <button type="submit" name="submit" class="btn">submit</button>

            </div>
        </form>
    </div>

<!-- form section ends here! -->


</body>
</html>



                      