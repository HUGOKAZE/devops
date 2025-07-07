<?php
session_start();
 $name= $_SESSION["name"];
 $id=$_SESSION["user_id"];
  $image=$_SESSION['image'];
  $localhost="localhost";
  $dbuser="root";
  $dbname="job";
  $dbpassword="";
  $conn=mysqli_connect($localhost,$dbuser,$dbpassword,$dbname);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            margin: 0;
        }
        body{
            width: 100%;
            height: 100vh;
            background-color: rgba(209, 213, 219, 0.5);
            display: flex;
            overflow-y: hidden;
        }
        .div1{
            width: 16%;
            height: 100%;
            background-color: white;
        }
         .nomE{
            margin-top: 15px;
            margin-left: 10px;

         }
         .svg{
            width: 100px;
            height: 100px;
            margin-top: 22px;
            border-radius: 100%;
           
         }
         .divsvg{
            display: flex;
            width: 100%;
            justify-content: center;
         }
         .ar{
            display: flex;
            text-decoration: none;
            justify-content: center;
            margin-top: 55px;
            background-color: rgba(209, 213, 219, 0.5);
            height: 40px;
         }
         .ret{
            width: 30px;
            height: 30px;
         }
         .aqw{
            margin-left: 8px;
            margin-top: 8px;
            font-size: 20px;
         }
         .br{
            display: flex;
            text-decoration: none;
            justify-content: center;
            margin-top: 15px;

         }
         .in{
            margin-top: 12px;
            margin-left: 6px;
         }
         .btn{
            margin-top: 60px;
            display: flex;
            justify-content: center;
            width: 100%;
            height: 40px;
            cursor: pointer;

         }
         .log{
            cursor: pointer;
            display: flex;
            width: 130px;
            height: 40px;
            border-radius: 10px;
            background-color: blue;
            border: none;
         }
         .tre{
            margin-left: 8px;
            margin-top: 4px;
            width: 40px;
            height: 34px;
            color: white;
         }
         .pp{
            margin-top: 10px;
            color: white;
         }
         .div2{
            width: 84%;
            height: 100%;

         }
         .nav{
            width: 100%;
            height: 50px;
            display: flex;
            justify-content: space-between;
         }
         .mo{
           
            width: 70%;
           display: flex;
         }
        
         .sea{
            margin-left: 10px;
            text-align: center;
            margin-top: 5px;
            width: 98%;
            height: 35px;
            border: none;
            border-radius: 10px;
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
         .repartition{
            width: 100%;
            margin-top: 7px;
            height: 17%;
          
            display: flex;
            justify-content: center;
         }
         .forme{
            margin-top: 10px;
            border-radius: 10px;
            border: none;
            width: 200px;
            height: 110px;
           background-color: rgba(0, 0, 255, 1);
         }
         .forme1{
            margin-left: 20px;
            margin-top: 10px;
            border-radius: 10px;
            border: none;
            width: 200px;
            height: 110px;
           background-color: rgba(65, 105, 225, 1);
         }
         .forme2{
            margin-left: 20px;
            margin-top: 10px;
            border-radius: 10px;
            border: none;
            width: 200px;
            height: 110px;
           background-color: rgb(132, 225, 65);
         }
         .forme3{
            margin-left: 20px;
            margin-top: 10px;
            border-radius: 10px;
            border: none;
            width: 200px;
            height: 110px;
           background-color: rgb(147, 189, 117);
         }
         .mp{
            width: 100%;
            height: 100%;
            display: flex;
         }
         .cercle{
            margin: 20px;
            width: 65px;
            height: 65px;
            background-color: white;
            border-radius: 100%;
         }
        .people{
            margin-top: 8px;
            width: 50px;
            height: 50px;
            margin-left: 6px;
        }
        .pri{
            height: 100%;
        }
        .candidate{
            margin-top: 20px;
            color: white;
        }
        .nbre{
            margin-top: 15px;
            font-weight: bold;
            font-size: 20px;
            color: white;
        }
        .classe{
            margin-top: 4px;
            width: 100%;
            height: 250px;
            
            display: flex;
            justify-content: center;
        }
        .classe1{
            margin-top: 18px;
            width: 100%;
            height: 280px;
            
            display: flex;
            justify-content: center;
        }
        .cote1{
            border-radius: 12px;
            width: 65%;
            height: 100%;
            background-color: white;
        }
        .cote2{
            margin-left: 20px;
            border-radius: 12px;
            width: 25%;
            height: 100%;
            background-color: white;
        }
        .doc{
            margin-left: 10px;
            margin-top: 6px;
            color: blue;
        }
        .selete{
            color: green;
            font-size: 20px;
            text-align: center;
         }
         .lis{
            width: 100%;
            text-align: center;
            color: white;
         }
         .treza{
            background-color: gray;
            
         }
         .lis2{
            width: 100%;
            
         }
         thead{
            width: 100%;
         }
         thead>tr{
            width: 100%;
         }
         .docu{
            width: 70%;
            
         }
         .even-row {
                background-color: #ffffff; /* Couleur pour les lignes paires */
            }

            .odd-row {
                background-color: #f2f2f2; /* Couleur pour les lignes impaires */
            } 
         .op{
            width: 30%;
         }
         .jur{
            color: black;
         }
         .su{
            height: 30px;
         }   
         .docu{
            
            width: 100%;
            
            display: flex;
            justify-content: space-between;
         }
         .hju{
            width: 2%;
            display: flex;
            
         }
         .mon{
            
            width: 98%;
           display: flex;
            height: 30px;
         }
         .see{
            width: 20px;
            height: 20px;
            color: black;
           
         }
         .dowlo{
            width: 20px;
            height: 20px;
            margin-left: 10px;
            color: black;
         }
         .chart{
            width: 100%;
            height: 260px;
         }
         
    </style>
</head>
<body>
    <div class="div1">
        <h2 class=" nomE"><?php echo $name?></h2>
        <div class="divsvg">
            <img src="../<?php echo $image?>" class="svg" alt="">       
        </div>
         <a href="" class="ar">
            <div>
            <svg class="ret" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                </svg>

            </div>
           <p class="aqw">Statistique</p>

         </a>
         <a href="list_of_job.php" class="br">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ret">
                <path stroke-linecap="round" stroke-linejoin="round" d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>


            </div>
           <p class="aqw">List of job</p>

         </a>
         <a href="add_job.php" class="br">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ret">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>



            </div>
           <p class="aqw">Add a Job</p>

         </a>
         <a href="candidatS" class="br">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ret">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
            </svg>
            </div>
           <p class="aqw">Selected </p>

         </a>
         <a href="candidat.php" class="br">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ret">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>

            </div>
           <p class="aqw"> candidate</p>

         </a>
         <a href="pre-select.php" class="br">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ret">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                </svg>


            </div>
           <p class="aqw"> Pre-select</p>

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
            <button class="log">
              <div>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tre">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
            </svg>
              
              </div>
            <div> 
               <h3 class="pp">Log out </h3></div> </button>

         </div>
    </div>
    <div class="div2">
        <div class="nav">
            <div class="mo" > 
                
             <input type="text" class="sea" name="" id="" placeholder="🔎  search ">
            </div>
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
          <div class="repartition">
              <div class="forme">
                <?php $sql2=mysqli_query($conn,"SELECT count(*) AS nbre from job_application where employer_id=$id");
                $tre=mysqli_fetch_assoc($sql2);
                $nbe=$tre['nbre'];
                ?>
                <div class="mp">
                    <div class="cercle">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="people">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>
                       
                    </div>
                    <div class="pri">
                            <p class="candidate">candidate</p>
                            <?php if ($nbe > 0) {
                               
                             ?>
                            <p class="nbre"><?php echo$nbe?></p>
                            <?php }else {
                             ?>
                             <p class="nbre">0</p>
                             <?php
                             }?>
                     </div>

                   
                </div>
                 </div>
                 <div class="forme1">
                <div class="mp">
                    <div class="cercle">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="people">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>

                       
                    </div>
                    <div class="pri">
                            <p class="candidate">accepted</p>
                            <?php $sql3=mysqli_query($conn,"SELECT count(*) AS nbre from selected where ident=$id");
                $tret=mysqli_fetch_assoc($sql3);
                $nbre=$tret['nbre'];
                ?>
                            
                            <?php if ($nbre>0) {
                                # code...
                            ?>
                            <p class="nbre"><?php echo$nbre?></p>
                            <?php }else {
                                
                            ?> 
                            <p class="nbre">0</p>
                            <?php } ?>
                     </div>

                   
                </div>
                 </div>
                 <div class="forme2">
                <div class="mp">
                    <div class="cercle">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="people">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>


                       
                    </div>
                    <div class="pri">
                            <p class="candidate">nbre job</p>
                            <?php $sql4=mysqli_query($conn,"SELECT count(*) AS nbre from job_post where user_id=$id");
                $trete=mysqli_fetch_assoc($sql4);
                $nbret=$trete['nbre'];
                ?>
                            
                            <?php if ($nbret>0) {
                                # code...
                            ?>
                            <p class="nbre"><?php echo$nbret?></p>
                            <?php }else {
                                
                            ?> 
                            <p class="nbre">0</p>
                            <?php } ?>
                            
                     </div>

                   
                </div>
                 </div>
                 <div class="forme3">
                <div class="mp">
                    <div class="cercle">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="people">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                    </svg>



                       
                    </div>
                    <div class="pri">
                            <p class="candidate">Money</p>
                            <?php $sql5=mysqli_query($conn,"SELECT SUM(montant) AS mon from selected where ident=$id");
                $tretre=mysqli_fetch_assoc($sql5);
                $nbrete=$tretre['mon'];
                ?>
                            
                            <?php if ($nbrete>0) {
                                # code...
                            ?>
                            <p class="nbre"><?php echo$nbrete?></p>
                            <?php }else {
                                
                            ?> 
                            <p class="nbre">0</p>
                            <?php } ?>
                     </div>

                   
                </div>
                 </div>
  
  

          </div>
           <div class="classe">
            <div class="cote1">
            <div class=" chart">
               <canvas class="chio" id="myChart"></canvas>
            </div>
            </div>
            <div class="cote2"></div>
           </div>
           <div class="classe1">
            <div class="cote1">
                <p class="selete">selected</p>
                <table class="lis" cellspacing="0">
                    <thead class="treza">
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Job</td>
                            <td>Price</td>
                            <td>Date</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
         
             $sql="SELECT * FROM selected where ident=$id";
             $req=mysqli_query($conn,$sql);

             $counter = 0;
             while($row=mysqli_fetch_assoc($req)) {
              $nameid=$row['idselecte'];
              $na=$row['idjob'];
              $sql4="SELECT * FROM job_post where job_post_id=$na";
              $row4=mysqli_query($conn,$sql4);
              $row5=mysqli_fetch_assoc($row4);
              $namet=$row5['title'];
              $sql2="SELECT * FROM user where user_id=$nameid";
              $row1=mysqli_query($conn,$sql2);
              $row2=mysqli_fetch_assoc($row1);
              $name=$row2['name'];
              $rowClass = ($counter % 2 == 0) ? 'even-row' : 'odd-row';
              $counter++;
             
           
            ?>
            <tr class="jur  <?php echo $rowClass; ?>" >
              <td class="su"><?php echo$row['id']?></td>
              <td><?php echo$name?></td>
              <td><?php echo$namet?></td>
              
              <td><?php echo$row['montant']?></td>
              <td><?php echo$row['datet']?></td>
              <td></td>
              
            </tr>
            <?php
            }?>
          </tbody>
                </table>
            </div>
            <div class="cote2">
                <p class="doc"> Documents received</p>
                <table cellspacing="0" class="lis2">
                    <thead class="">
                        <tr>
                         <td class="docu" >Doc</td>
                        <td class="op">Option</td>
                    </tr>
                    </thead>
                    <?php
$sql2 = "SELECT * FROM selected WHERE ident=$id";
$req1 = mysqli_query($conn, $sql2);

$counter = 0;
while ($row2 = mysqli_fetch_assoc($req1)) {
    $rowClass = ($counter % 2 == 0) ? 'even-row' : 'odd-row';
    $counter++;

  
    ?>
    <tr class="docu">
        <td class="mon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
        </svg>

            <?php echo basename($row2["cv"]); ?>
        </td>
        <td class="hju">
            <a href="../uploads/<?php echo $row2["cv"]; ?>" target="_blank" class="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="see">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>

            </a>
            <a href="../uploads/<?php echo $row2["cv"]; ?>" download class="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="dowlo">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>

            </a>
        </td>
    </tr>
    <?php
}
?>

                    

                </table>
            </div>
           </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['March', 'April'], // Vos mois
        datasets: [{
            label: 'Total amount of people select (fcfa)',
            data: [200000, 250000], // Exemple de données
            backgroundColor: [
                'rgba(54, 162, 235, 0.5)', // Couleur pour Mars
                'rgba(255, 99, 132, 0.5)'  // Couleur pour Avril
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    callback: function(value) {
                        return value.toLocaleString() + ' fcfa';
                    }
                }
            }
        }
    }
});
</script>
    
</body>
</html>