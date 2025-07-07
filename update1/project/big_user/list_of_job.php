<?php
session_start();
 $name= $_SESSION["name"];
$id=$_SESSION["user_id"];
  $image=$_SESSION['image'];
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" : />
    <title>Document</title>
    <link rel="stylesheet" href="../Admin/style.css">
    <style>
       
.ma{
  width:100%;
  height: 55px;
  display: flex;
  background-color: white;
  justify-content: space-between;
}
.se{
  margin-top: 12px;
  margin-left: 6px;
}
.action{
    display: flex;
    justify-content: space-around;
}
.sza{
    width: 30px;
    height: 30px;
    color: black;
}
.pa{
            display: flex;
         }
         .message{
            width: 30px;
            margin-top: 10px;
            height: 30px;
            margin-right: 10px;
         }
         .message2{
            width: 30px;
            margin-top: 10px;
            height: 30px;
            margin-right: 10px;
            border-radius: 100%;
         }
         .nb{
          font-size: 15px;
          margin-top: 1px;
           margin-left: 8px;

         }
         .prese{
          width: 100%;
          height: 80px;
          display: flex;
          justify-content: space-between;
          background-color: white;
         }
         .ty{
          margin-top: 30px;
         }
         .all{
          margin-left: 10px;
          border-bottom: 4px solid blueviolet;
          margin-top: 20px;
          color: blue;
         }
         table{
                width: 100%;
                text-align: center;
         }
         thead{
          background-color: yellowgreen;
          text-align: center;
          color: white;
          font-weight: bold;
          height: 25px;
         }
         .trt{
          width: 100%;
          height: 500px;
          display: flex;
          justify-content: center;
          align-items: center;

         }
         .sub{
          display: flex;
          justify-content: space-between;
         }
         .svh{
          width: 20px;
          height: 20px;
         }
         .even-row {
                background-color: #ffffff; /* Couleur pour les lignes paires */
            }

            .odd-row {
                background-color: #f2f2f2; /* Couleur pour les lignes impaires */
            }
         .su{
          height: 40px;
         }
    </style>
</head>
<body>
    <div class="div1">
    <h2 class=" nomE"><?php echo $name?></h2>
        
         <a href="index.php" class="ar">
            <div>
            <svg class="ret" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                </svg>

            </div>
           <p class="aqw">Statistique</p>

         </a>
         <a href="index.php" class="br">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ret">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>


            </div>
           <p class="aqw">List of Employer</p>

         </a>
         <a href="list_of_job.php" class="cr">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ret">
                <path stroke-linecap="round" stroke-linejoin="round" d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>



            </div>
           <p class="aqw">List of Job</p>

         </a>
         <a href="list_selected" class="br">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ret">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
            </svg>
            </div>
           <p class="aqw">list of Selected </p>

         </a>
         <a href="list_candidate.php" class="br">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ret">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>

            </div>
           <p class="aqw"> list of candidate</p>
         </a>
         <a href="list_preselect.php" class="br">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ret">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                </svg>


            </div>
           <p class="aqw">list of Pre-select</p>

         </a>
         </a>
         <p class="in"> information</p>
         <a href="" class="br">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ret">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>



            </div>
           <p class="aqw"> Account</p>

         </a>

         <a href="" class="br">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ret">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>


            </div>
           <p class="aqw"> Setting</p>

         </a>
         <div class="btn">
         <a class="log" href="log_out.php">
              <div>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tre">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
            </svg>
              
              </div>
            <div> 
               <h3 class="pp">Log out </h3></div> </a>

         </div>
    </div>
    <div class="div2">
      <div class="ma">
         <div><h2 class="se">list of Job</h2> <p class="nb"> nbre job</p></div>
         <div class="pa" >
                <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="message">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                    </svg>

                </div>
                <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="message">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>

                </div>
                <div>
                <img src="../<?php echo $image?>" class="message2" alt="">

                </div>

            </div>
      </div>
      <div class="prese">
        <div class="ty">
          <h3 class="all">All selected</h3>
        </div>
        <div></div>   
      </div>
        <table class="" cellspacing="0">
          <thead>
            <tr>
              <td>Id</td>
              <td>Name</td>
              <td>Employer</td>
              <td>Date</td>
               <td>salary</td>
               <td>part_time </td>
               <td>Action</td>
            </tr>
          </thead>
          <tbody>
            <?php 
             $localhost="localhost";
             $dbuser="root";
             $dbname="job";
             $dbpassword="";
             $conn=mysqli_connect($localhost,$dbuser,$dbpassword,$dbname);
             $sql="SELECT * FROM job_post ";
             $req=mysqli_query($conn,$sql);

             $counter = 0;
             while($row=mysqli_fetch_assoc($req)) {
                $nameE=$row['user_id'];
                $name=mysqli_query($conn,"SELECT * FROM user where user_id=$nameE");
                $row1=mysqli_fetch_assoc($name);
                $vre=$row1['name'];
              
              $rowClass = ($counter % 2 == 0) ? 'even-row' : 'odd-row';
              $counter++;
             
           
            ?>
            <tr class="<?php echo $rowClass; ?>">
              <td class="su"><?php echo$row['job_post_id']?></td>
              <td><?php echo$row['title']?></td>
              <td><?php echo$vre?></td>
              <td><?php echo$row['created_at']?></td>
              <td><?php echo$row['salary_range']?></td>
              <td><?php echo$row['part_time']?></td>
              <td class="action">
                <a href="delette.php?id=<?php echo$row['user_id']?>" onclick="return confirm("voulez vous vraiment supprimez?")">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sza">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

                </a>
                
                <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sza">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>

                </a>
              </td>
              
            </tr>
            <?php
            }?>
          </tbody>
          
         
        </table>
        
         
    </div>
    
</body>
</html>