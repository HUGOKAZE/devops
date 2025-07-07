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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src='https://meet.jit.si/external_api.js'></script>
   
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
.email-sent {
            color: green;
            font-size: 12px;
            margin-left: 10px;
        }
        #video-call-modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            z-index: 1000;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 80%;
            max-width: 800px;
        }
        #video-call-container {
            height: 500px;
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
         .tgb{
          width: 100%;
          height: 500px;
          display: flex;
        

         }
         .sub{
            height: 40px;

          display: flex;
          justify-content: space-between;
         }
         .even-row {
                background-color: #ffffff; /* Couleur pour les lignes paires */
            }

            .odd-row {
                background-color: #f2f2f2; /* Couleur pour les lignes impaires */
            }
         
         .svh{
            cursor: pointer;
            margin-top: 10px;
          width: 20px;
          height: 20px;
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
         <a href="add_job.php" class="br">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ret">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>



            </div>
           <p class="aqw">Add a Job</p>

         </a>
         <a href="candidatS.php" class="br">
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
         <a href="" class="cr">
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
      <div class="ma">
         <div><h2 class="se">All Selected Candidate</h2> <p class="nb"> nbre candidate selected</p></div>
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
              <td>Address</td>
              <td>Date</td>
               <td>Price</td>
               <td>JOb</td>
               <td>Action</td>
            </tr>
          </thead>
          
            <?php 
             $localhost="localhost";
             $dbuser="root";
             $dbname="job";
             $dbpassword="";
             $conn=mysqli_connect($localhost,$dbuser,$dbpassword,$dbname);
             $sql="SELECT * FROM job_application where employer_id=$id and statut =1";
             $req=mysqli_query($conn,$sql);
             $counter = 0;
             
             while($row=mysqli_fetch_assoc($req)) {
                $ire=$row['application_id'];
              $nameid=$row['candidate_id'];
              $na=$row['idjob'];
              $sql4="SELECT * FROM job_post where job_post_id=$na";
              $row4=mysqli_query($conn,$sql4);
              $row5=mysqli_fetch_assoc($row4);
              $namet=$row5['title'];
              $salaire=$row5['salary_range'];
              $sql2="SELECT * FROM user where user_id=$nameid";
              $row1=mysqli_query($conn,$sql2);
              $row2=mysqli_fetch_assoc($row1);
              $name=$row2['name'];
              $email=$row2['email'];
              $rowClass = ($counter % 2 == 0) ? 'even-row' : 'odd-row';
              $counter++;
           
            ?>
            <tr class="<?php echo $rowClass; ?>">
              <td><?php echo$row['application_id']?></td>
              <td><?php echo$name?></td>
              <td><?php echo$email?></td>
              <td><?php echo$row['application_date']?></td>
              <td><?php echo$salaire?></td>
              <td><?php echo$namet?></td>
              <td class="sub">
                <a href="refu.php?id=<?php echo$ire?>"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svh">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
             </a>
             <a href="#" onclick="startVideoCall('<?php echo $email; ?>')">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svh">
            <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
        </svg>
    </a>
                <a class="" href="valided?id=<?php echo$ire ?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svh">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>

             </a>
                 
              </td>
            </tr>
            <?php
            }?>
          
         
        </table>
        <!-- [Votre HTML existant jusqu'au modal] -->


        <div id="video-call-modal">
        <button onclick="closeVideoModal()" style="float: right; background: #ff4444; color: white; border: none; padding: 5px 10px; border-radius: 3px; cursor: pointer;">Fermer</button>
        <div id="video-call-container"></div>
        <div style="margin-top: 20px; text-align: center;">
            <button id="send-invite-btn" onclick="sendMeetingInvitation()" style="background: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
                Envoyer l'invitation par email
            </button>
            <span id="email-status" class="email-sent"></span>
            <div id="meeting-link" style="margin-top: 10px; word-break: break-all;"></div>
        </div>
    </div>

    <!-- Chargement asynchrone de l'API Jitsi -->
    <script src='https://meet.jit.si/external_api.js'></script>
    <script>
        let currentMeetingUrl = '';
        let currentCandidateEmail = '';
        let jitsiApi = null;

        function loadJitsiScript() {
            return new Promise((resolve, reject) => {
                if (window.JitsiMeetExternalAPI) {
                    resolve();
                    return;
                }

                const script = document.createElement('script');
                script.src = 'https://meet.jit.si/external_api.js';
                script.onload = resolve;
                script.onerror = () => reject(new Error('Failed to load Jitsi API'));
                document.head.appendChild(script);
            });
        }

        async function startVideoCall(email) {
            try {
                await loadJitsiScript();
                
                currentCandidateEmail = email;
                const roomName = `job_interview_${email}_${Date.now()}`;
                currentMeetingUrl = `https://meet.jit.si/${roomName}`;
                
                document.getElementById('meeting-link').textContent = currentMeetingUrl;
                document.getElementById('video-call-modal').style.display = 'block';
                document.getElementById('email-status').textContent = '';

                const options = {
                    roomName: roomName,
                    width: '100%',
                    height: '100%',
                    parentNode: document.querySelector('#video-call-container'),
                    interfaceConfigOverwrite: {
                        DISABLE_DOMINANT_SPEAKER_INDICATOR: true,
                        DISABLE_VIDEO_BACKGROUND: true
                    },
                    configOverwrite: {
                        disableAudioLevels: true,
                        enableNoAudioDetection: false
                    },
                    userInfo: {
                        email: 'recruiter@company.com',
                        displayName: 'Recruteur'
                    }
                };

                jitsiApi = new JitsiMeetExternalAPI('meet.jit.si', options);
            } catch (error) {
                console.error("Jitsi Error:", error);
                alert("Erreur lors du chargement de la vidéoconférence: " + error.message);
            }
        }

        function closeVideoModal() {
            if (jitsiApi) {
                jitsiApi.dispose();
                jitsiApi = null;
            }
            document.getElementById('video-call-modal').style.display = 'none';
        }

        async function sendMeetingInvitation() {
    const btn = document.getElementById('send-btn');
    const statusEl = document.getElementById('email-status');
    
    btn.disabled = true;
    statusEl.innerHTML = '<span class="loading">Envoi en cours...</span>';
    
    try {
        const response = await fetch('send_invitation.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({
                meeting_url: currentMeetingUrl,
                candidate_email: currentCandidateEmail
            }),
            credentials: 'same-origin'
        });

        if (!response.ok) throw new Error('Erreur réseau');

        const result = await response.json();
        
        if (!result.success) {
            throw new Error(result.error || 'Échec du serveur');
        }

        statusEl.innerHTML = '<span class="success">✓ Invitation envoyée!</span>';
        
    } catch (error) {
        console.error('Erreur:', error);
        statusEl.innerHTML = `<span class="error">✗ ${error.message}</span>`;
        
        // Affichage des détails en développement
        if (window.location.hostname === 'localhost') {
            statusEl.innerHTML += `<br><small>${error.stack || ''}</small>`;
        }
    } finally {
        btn.disabled = false;
    }
}
    </script>
    
</body>
</html>