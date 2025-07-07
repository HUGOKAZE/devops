 <?php 
    session_start();
   

     $nom = $_SESSION['name'];
    $id = $_SESSION['user_id'];
     $host = "localhost";
    $dbname = "job";
    $user = "root";
    $password = "";
    
      $conn=mysqli_connect($host,$user,$password,$dbname);

       
    ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>peope parrainee</title>
    <style> *{
            margin: 0;
    }
    .tre{
        margin-top: 40px;
    }
    .liste{
        border: hidden;
         color: white;
         font-size: 20px;
         text-decoration: none;
        margin-left: 70px;
    }
    .perspar{
        margin-top: 20px;
    }
    .pers{
        text-decoration: none;
        color: white;
        padding-top: 30px;
        font-size: 20px;
        margin-left: 64px;
    }
    body{
        width: 100%;
        display: flex;
        overflow-y: hidden;
        overflow-x: hidden;
        background-color: rgba(209, 213, 219, 1);
    }
    .nav{
        width: 20%;
        height: 800px;
        background-color: rgb(21, 226, 89);
    
    }
    .sve{
        margin-top: 30px;
        margin-left: 70px;
    }
    .name{
        color: white;
        margin-top: 14px;
        margin-left: 70px;
        font-size: 20px;

    }
    .contenaire{
        width: 80%;
        width: 100%;
    }
    .navcontaire{
        width: 100%;
        height: 45px;
        background-color: white;
        border-radius: 10px;
    }
    .divcarte{
        display: flex;
        margin-top: 20px;
        width: 100%;
    }
    .cartes{
        border-radius: 14px;
       margin-left: 30px;
        width: 30%;
        height: 170px;
        background-color: white;
        box-shadow: 10px 10px 5px  #666;
    }
     .cartes1{
        border-radius: 14px;
       margin-left: 25px;
        width: 30%;
        height: 170px;
        background-color: white;
        box-shadow: 10px 10px 5px  #666;
    }
    .cartes2{
        border-radius: 14px;
       margin-left: 25px;
        width: 30%;
        height: 170px;
        background-color: white;
        box-shadow: 10px 10px 5px  #666;
    }
    .tabler{
        margin-top: 40px;
        margin-left: 20px;
        border-radius: 20px;
        width: 95%;
        height: 500px;
        background-color: white;
    }
    table{
       
        width: 100%;
    }
   
    .titre{
       height: 30px;
       color: yellow;
       font-weight: bo;
        width: 100%;
        text-align: center;
       font-size: 18px;
       border-radius: 20px;
       background-color: rgba(0, 0, 255, 0.6);
    }
    .result{
        width: 100%;
        height: 45px;
        text-align: center;
        border-bottom: 4px solid gray;
    }

    </style>
</head>
<body>
<div class="nav">
        <div>
        <svg class="sve" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M12 2A10.13 10.13 0 0 0 2 12a10 10 0 0 0 4 7.92V20h.1a9.7 9.7 0 0 0 11.8 0h.1v-.08A10 10 0 0 0 22 12 10.13 10.13 0 0 0 12 2zM8.07 18.93A3 3 0 0 1 11 16.57h2a3 3 0 0 1 2.93 2.36 7.75 7.75 0 0 1-7.86 0zm9.54-1.29A5 5 0 0 0 13 14.57h-2a5 5 0 0 0-4.61 3.07A8 8 0 0 1 4 12a8.1 8.1 0 0 1 8-8 8.1 8.1 0 0 1 8 8 8 8 0 0 1-2.39 5.64z"></path><path d="M12 6a3.91 3.91 0 0 0-4 4 3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4zm0 6a1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2 1.91 1.91 0 0 1-2 2z"></path></svg>
        </div>
        <h1 class=" text-white name"><?php echo$nom;?></h1>
         <div class="tre">
            <a href="" class="liste">Statistique</a>
            <div class="perspar">
            <a href="" class="pers"> job postuler  </a>

            </div>
            <div class="perspar">
            <a href="selectionner.php" class="pers"> job selected  </a>

            </div>
           
         </div>
     

    </div>
    <div class="contenaire">
        <div class="navcontaire"></div>
        <div class="divcarte">
            <div class="cartes"></div>
            <div class="cartes1"></div>
            <div class="cartes2"></div>

        </div>
        <div class="tabler">
        <table class="" cellspacing="0">
          <th class="">
            <tr class="titre">
                <td>ID</td>
                <td>Nom </td>
                <td>Nom entreprise</td>
                <td>job</td>
                <td>date</td>
                <td>statut</td>
            </tr>
          </th>
           <?php 
           $re=mysqli_query($conn,"SELECT * FROM job_application where candidate_id =$id");
           
        
           
           while ($req=mysqli_fetch_assoc($re)) {
            $tr=$req['employer_id'];
            $namee="SELECT * FROM user where user_id=$tr";
            $sze=mysqli_query($conn,$namee);
            $az=mysqli_fetch_assoc($sze);
            $ent=$az['name'];
             
            $idj=$req['idjob'];
             $idjob="SELECT * FROM job_post where job_post_id=$idj";
             $idr=mysqli_query($conn,$idjob);
             $row2=mysqli_fetch_assoc($idr);
             $idnamjob=$row2['title']

           ?>
           <tr class="result">
            <td><?php echo$req['application_id'] ?></td>
            <td><?php echo$nom?></td>
            <td><?php echo$ent ?></td>
            <td><?php echo$idnamjob ?></td>
            <td><?php echo$req['application_date'] ?></td>
            <td><?php $statut=$req['statut'];
                 if ($statut==0) {
                   echo"en attente";
                 }elseif ($statut==1) {
                    echo"pre-select";
                 }else {
                    echo"refuse";
                 }
            ?></td>
           </tr>
           <?php  }?>
       </table> 

        </div>
      
    </div>
    
</body>
</html>