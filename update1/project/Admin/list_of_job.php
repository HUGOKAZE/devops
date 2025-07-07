<?php
session_start();
 $name= $_SESSION["name"];

  $image=$_SESSION['image'];
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
        }
        body{
            width: 100%;
            height: 100vh;
            background-color: rgba(209, 213, 219, 0.5);
            display: flex;
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
         .cr{
            display: flex;
            text-decoration: none;
            justify-content: center;
            margin-top: 15px;
            background-color: rgba(209, 213, 219, 0.5);
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
         .div3{
           width: 100%;
           height: 50px;
         
           display: flex;
         }
         .div4{
            width: 71%;
            height: 100%;
          
            display: flex;
            justify-content: space-between;
         }
         .sv{
            margin-top: 15px;
            margin-left: 10px;
            width: 20px;
            height: 20px;
         }
         .element{
            display: flex;
           
           
            
         }
         .jobs{
            font-size: 20px;
            font-weight: bold;
            margin-left: 20px;
            margin-top: 15px;
         }
         
         .search{
            margin-top: 6px;
            text-align: center;
            border-radius: 10px;
            width: 500px;
            height: 30px;
            border: none;
         }
         .div5{
            width: 29%;
           
            display: flex;
            justify-content: space-between;
         }
         .message{
            width: 30px;
            margin-top: 10px;
            height: 30px;
            margin-right: 29px;
         }
         .message1{
            width: 30px;
            margin-top: 10px;
            height: 30px;
            margin-right: 10px;
            border-radius: 100%;
         }
        .per{
         margin-left: 40px;
         display: flex;
        }
        .user{
         display: flex;
        }
        .na{
         margin-top: 17px;
         font-weight: bold;
         margin-right: 15px;
        }
        .div6{
         display: flex;
         justify-content: center;
        }
        .long{
         margin-top: 29px;
         width: 95%;
         background-color: white;
         border-radius: 10px;
         display: flex;
         height: 55px;
        }
        .ct1{
         width: 20%;
         display: flex;
         height: 100%;
         border-radius: 10px;
         justify-content: center;
       
        }
        .ct2{
         width: 60%;
         height: 100%;
       
         background-color: red;
         border-right: 2 black solid;
        }
        .ct3{
         width: 20%;
         height: 100%;
         border-radius: 10px;
       
         border-right: 2 black solid;
         display: flex;
        }
        .maps{
         margin-top: 5px;
         
         width: 35px;
         height: 40px;
         color: blue;
        } 
        .se{
         width: 150px;
         margin-left: 4px;
         height: 40px;
         margin-top: 5px;
         border: none;
        }
        .sez{
         width: 100%;
         border: none;
         height: 100%;
          
        }
        .rond{
         margin-top: 10px;
         margin-left: 10px;
         border-radius: 14px;
         width: 85px;
         height: 40px;
         display: flex;
         justify-content: center;
         background-color: blueviolet;
        }
        .rond2{
         margin-top: 10px;
         margin-left: 10px;
         border-radius: 14px;
         width: 85px;
         height: 40px;
         display: flex;
         justify-content: center;
         background-color: gray;
        }
        .re{
         margin-top: 10px;
         color: white;
         width: 20px;
         height: 20px;
        }
        .AQW{
         display: flex;
        }
        .as{
         margin-left: 2px;
         color: white;
         margin-top: 12px;
         font-size: 14px;
        }
        .div7{
         margin-top: 20px;
         width: 100%;
         height: 50px;
         display: flex;
         justify-content: center;
        }
        .ct7{
        width: 95%;
       
        display: flex;
        justify-content: space-between;  

        }
        .nb{
         font-weight: bold;
         margin-top: 5px;
         margin-left: 5px
        }
        .bas{
         margin-top: 5px;
         margin-left: 5px
        }
        .th{
         display: flex;
        }
        .tg1{
         width: 40px;
         height: 40px;
         border-radius: 100%;
         margin-right: 15px;
          border: 3px solid blue;
        }
        .tg2{
         width: 40px;
         height: 40px;
         border-radius: 100%;
          border: 3px solid blue;
        }
        .vb{
         margin-top: 7px;
         margin-left: 7px;
         color: blue;
         width: 25px;
         height: 25px;
        }
        .tyu{
         display: flex;
         justify-content: center;
       }
       .tfc{
         margin-top: 20px;
         width: 95%;
         display: grid;
         max-height: 513px;
         overflow-y: auto;
          grid-template-columns: repeat(3, 1fr); 
          gap: 10px; 
       
       }
       .cadre{
         border-radius: 12px;
         width: 350px;
         height: 200px;
         background-color: white;
       }
       .ca1{
         margin-top: 5px;
         margin-left: 6px;
         width: 100%;
         height: 50px;
      
         display: flex;
         justify-content: space-between;
       }
       .svg4{
         width: 50px;
         height: 5   0px;
       }
       .ki{
         width: 49px;
         height: 45px;
         margin-top: 4px;
         background-color: blue;
         margin-right:10px;
       }
       .tra{
         margin-top: 4px;
       }
       .prix{
         margin-left: 6px;
         margin-top: 4px;
       }
       .te{
         margin-left: 6px;
         margin-top: 3px;
       }
       .nji{
         width: 100%;
         height: 40px;
         margin-top: 4px;
         
         display: flex;
         justify-content: space-between;
       }
       .remo{
         margin-top: 10px;
         width: 80px;
         height: 30px;
         margin-left: 4px;
         border-radius: 10px;
         background-color: rgba(65, 105, 225, 0.5);
         border: none;
       }
       .remo>p{
         text-align: center;
       }
       .ville{
         margin-top: 10px;
         margin-right: 8px;
       }
    </style>
</head>
<body>
    <div class="div1">
        <h2 class=" nomE"><?php echo $name?></h2>
        <div class="divsvg">
            <img src="../<?php echo $image?>" class="svg" alt="">       
        </div>
         <a href="index.php" class="ar">
            <div>
            <svg class="ret" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                </svg>

            </div>
           <p class="aqw">Statistique</p>

         </a>
         <a href="#" class="cr">
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
        <div class="div3">
            <div class="div4">
                <div class="element">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sv">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                    </svg>

                    </div>
                    <div>
                        <p class="jobs"> Job Sphere</p>
                    </div>
                </div>
                <div class="ele">
                  <input type="text" width="" class="search" name="" placeholder="search" id="">
                </div>

            </div>
            <div class="div5">
               <div class="per">
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
               </div>
               <div>
               <div class="user">
               <img src="../<?php echo $image?>" class="message1" alt="">       

               <p class="na"><?php echo $name?></p>

                </div>

               </div>

            </div>
           

        </div>
          <div class="div6">
            <div class="long">

            <div class="ct1">
               <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="maps">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                  </svg>
               </div>
               <div>
                  <select name="" id="" class="se">
                     <option value="">Cameroon</option>
                     <option value="">Usa</option>
                  </select>
               </div>
            </div>
            <div class="ct2">
               <input type="text" class="sez" placeholder="search of job">
            </div>
            <div class="ct3">
               <div class="rond">
                  <div class="AQW"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="re">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                     </svg>
                     </div>
                  <div><p class="as">FILTER</p></div>
               </div>
               <div class="rond2">
                  <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="re">
               <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
               </svg>
                  </div>
                  <div> <p class="as">FIND</p></div>
               </div>
            </div>
            </div>
          </div>

          <div class="div7">
            <div class="ct7">
               <div><p class="nb">Showing 246 jobs Results</p>
            <p class="bas"> Based your preferences</p>
            </div>
               <div class="th">
               <div class="tg1">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="vb">
               <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
               </svg>
               </div>
               <div class="tg2">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="vb">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                  </svg>
              </div>
               </div>
            </div>

          </div>


       <div class="tyu">
         <div class="tfc">
            <?php
            $localhost="localhost";
            $dbuser="root";
            $dbname="job";
            $dbpassword="";
            $conn=mysqli_connect($localhost,$dbuser,$dbpassword,$dbname);
            $id=$_SESSION["user_id"];
            $sql="SELECT * FROM job_post where user_id=$id";
            $tes=mysqli_query($conn,$sql);
            while($req=mysqli_fetch_assoc($tes)){

            ?>
        <div class="cadre">
         <div class="ca1">
            <div>
               <p>Maximaz Team</p>
               <h2 class="tra"><?php echo $req['title']?></h2>
            </div>
            <div class="ki"> 
            <img src="../<?php echo $image?>" class="svg4" alt=""> 
            </div>
            
         </div>
         <h4 class="prix"><?php echo $req['salary_range']?></h4>
         <p class="te"><?php echo $req['description']?> Lorem ipsum dolor sit, amet consectetur  neque dolorum nihil, omnis pariatur ipsa sapiente eveniet! </p>
         <div class="nji">
            <button class="remo"><p>Remote</p> </button>
            <div><h3 class="ville">Ville</h3></div>

         </div>
        </div>
          <?php  }?>


        

         </div>
           
       </div>
    </div>
    
</body>
</html>