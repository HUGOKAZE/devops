<?php
session_start();
 
 if (isset($_SESSION["name"])) {
 
$name= $_SESSION["name"];

 }




?>
<style>
  /* Style the modal (hidden by default) */
.modal {
    display: none; 
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4); /* Fallback color */
    padding-top: 60px;
}

/* Modal content */
.modal-content {
    background-color: #fff;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    height: 300px;
    max-width: 500px;
    text-align: center;
}
.modal-content h1{
    margin-top: 2rem;
    font-size: 4rem
}

.modal-content p{
    margin-top: 2rem;
    font-size: 3rem
}


/* Close button (top-right) */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

/* Style the buttons */
button {
    background-color: #2980b9;
    color: white;
    padding: 15px 32px;
    margin: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #2c3e50;
}

</style>

<header class="header">
    <section class="flex">

        <div id="menu-btn" class="fa fa-bars"></div>



        <a href="home.php" class="logo"><i class="fa fa-briefcase">JobSphere.</i></a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="candidate.php">Candidate</a>
             <a href="employer.php">Employer</a>
            <a href="about.php">about</a>
            <a href="jobs.php">Jobs</a>
            <a href="contact.php">Contact Us</a>
            <?php
              if(isset($_SESSION["name"])) {
             
            ?>
               
               <a href="./user/index.php"><?php echo$name ?></a>
               <a href="destroy.php">Log out</a>
               <?php } else {
                # code...
              ?> 
              
            <a href="login.php">Login</a>

        </nav>

        <a href="#" id="openModalBtn" class="btn" style="margin-top: 0;">Register Now</a>
        <?php }?>
    </section>
</header>


 
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1>Welcome User</h1>
            <p>Register as candidate or employer!</p>
           <a href="register.php"> <button id="button1">Candidate</button></a>
            <a href="form.php"><button  id="button2">Employer</button></a>
        </div>
    </div>

    <script>
      // Get modal and buttons
var modal = document.getElementById("myModal");
var openModalBtn = document.getElementById("openModalBtn");
var closeModalBtn = document.getElementsByClassName("close")[0];

// Open the modal when the button is clicked
openModalBtn.onclick = function() {
    modal.style.display = "block";
}

// Close the modal when the user clicks on the close button
closeModalBtn.onclick = function() {
    modal.style.display = "none";
}

// Close the modal if the user clicks anywhere outside of the modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Handle the two buttons inside the modal
//document.getElementById("button1").onclick = function() {
   // alert("!");
   // modal.style.display = "none";  // Close modal after click
//}

//document.getElementById("button2").onclick = function() {
    //alert("!");
    //modal.style.display = "none";  // Close modal after click
//}

    </script>