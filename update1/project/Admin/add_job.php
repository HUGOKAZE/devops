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
    <link rel="stylesheet" href="style.css">
    <style>
      .infos{
         margin-top: 20px;
       text-align: center;   
      }
      .cadre{
         width: 90%;
         height: 600px;
         background-color: white;
         border-radius: 15px;
         z-index: 10;
         margin-top: 20px;
      }
      .br4{
         width: 100%;
         display: flex;
         justify-content: space-between;
      }
      .circle {
         width: 200px;       
         height: 200px;        
         background-color: #4169E1;  
         border-radius: 50%; 
        margin-bottom: 40px;
         z-index: 0;
 }
 .contenaire{
   display: flex;
   justify-content: center;
 }
 form{
   width: 100%;
   height: 100%;
 }
 .division{
   width: 100%;
   height: 90%;

   display: flex;
 }
 .division1{
   width: 50%;
   height: 100%;
   border-radius: 10px;
  
 }
 .division2{
   width: 50%;
   height: 100%;
   border-radius: 10px;
   ;
 }
 .pre{
   margin-top: 20px;
   margin-left: 20px;

 }
 .title{
   font-size: 20px;
   margin-top: 6px;
 }
 .intit{
  margin-top: 4px;
   width: 540px;
   height: 38px;
   text-align: center;
   background-color: rgba(209, 213, 219, 0.7);
   border-radius: 10px;
 }
 .henry{
  border-radius: 10px;
  width: 540px;
  height: 120px;
  border: none;
  background-color: rgba(209, 213, 219, 0.7);
 }
 .btn2{
  display: flex;
  justify-content: center;  
  margin-top: 8px;
}
.save{
   margin-top: 10px;
   width: 130px;
   height: 32px;
   background-color: #4169E1;
   color: white;
   cursor: pointer;
   border-radius: 10px;
   border: none;

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
         <a href="list_of_job.php" class="br">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ret">
                <path stroke-linecap="round" stroke-linejoin="round" d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>


            </div>
           <p class="aqw">List of job</p>

         </a>
         <a href="" class="cr">
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
      <h2 class="infos"> ADD job Information</h2>
      <div class="contenaire">
      <div class="cadre">
       <form action="add.php" method="POST">
        <div>
        <div class="division">
            <div class="division1">
              <div class="pre">
                <p class="title">Title :</p>
                <div class="int">
                  <input type="text" class="intit" name="title" placeholder="please enter the Title of job " id="">
                </div>
              </div>
              <div class="pre">
                <p class="title">Qualification :</p>
                <div class="int">
                  <input type="text" class="intit" name="Qualification" placeholder="please enter the qualification" id="">
                </div>
              </div>
              <div class="pre">
                <p class="title">Salary :</p>
                <div class="int">
                  <input type="number" class="intit" name="salary" placeholder="please enter salary " id="">
                </div>
              </div>
              <div class="pre">
                <p class="title">part_time :</p>
                <div class="int">
                  <input type="text" class="intit" name="part_time" placeholder="please enter part_time " id="">
                </div>
              </div>
              <div class="pre">
                <p class="title">day_shift :</p>
                <div class="int">
                  <input type="text" class="intit" name="day" placeholder="please enter day_shift " id="">
                </div>
              </div>
              <div class="pre">
                <p class="title">skills :</p>
                <div class="int">
                  <input type="text" class="intit" name="skill" placeholder="please enter skills" id="">
                </div>
              </div>
             
            

            </div>
            <div class="division2">
            <div class="pre">
                <p class="title">country :</p>
                <div class="int">
                  <input type="text" class="intit" name="country" placeholder="please enter country" id="">
                </div>
              </div>
              <div class="pre">
                <p class="title">Town :</p>
                <div class="int">
                  <input type="text" class="intit" name="town" placeholder="please enter Town" id="">
                </div>
              </div>
              <div class="pre">
                <p class="title">Description :</p>
                <div class="int">
                  <textarea name="Description" class="henry" id=""></textarea>
                </div>
              </div>
              <div class="pre">
                <p class="title">Requirement :</p>
                <div class="int">
                  <textarea name="Requirement" class="henry" id=""></textarea>
                </div>
              </div>
              
            </div>
            
         </div>
         <div class="btn2">
          <button class="save" type="submit">save job</button>

         </div>

        </div>
        
       </form>
      </div>
      </div>
      <div class="br4">
          <div></div>
          <div class="circle"></div>
      </div>
      
    
        
         
    </div>
    
</body>
</html>