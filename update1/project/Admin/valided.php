<?php 

// Inclusion de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require dirname(__DIR__) . '/vendor/autoload.php';

  $id=$_GET['id'];
  $sql="SELECT * from job_application where application_id=$id";
  $localhost="localhost";
  $dbuser="root";
  $dbname="job";
  $dbpassword="";
  $conn=mysqli_connect($localhost,$dbuser,$dbpassword,$dbname);
  $req=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($req);
  $idapp=$row['application_id'];
   $idc=$row['candidate_id'];
   $idE=$row['employer_id'];
   $idj=$row['idjob'];
   $cv=$row['cv_build'];
   
   $sql4="SELECT * FROM user where user_id =$idc";
   $req3=mysqli_query($conn,$sql4);
   $row4=mysqli_fetch_assoc($req3);
   $email=$row4['email'];
   $nom=$row4['name'];
   echo$email;
   $sql5="SELECT * FROM user where user_id =$idE";
   $req4=mysqli_query($conn,$sql5);
   $row5=mysqli_fetch_assoc($req4);
   $employename=$row5['name'];
 
  $sql1="SELECT * FROM job_post where job_post_id =$idj";
  $req1=mysqli_query($conn,$sql1);
  $row1=mysqli_fetch_assoc($req1);
  $salaire=$row1['salary_range'];
  $title =$row1['title'];
  echo$salaire;



  $sql3="INSERT INTO selected(idjob,ident,idselecte,adresse,montant,cv)VALUES($idj,$idE,$idc,'$email',$salaire,'$cv')";
  $req6=mysqli_query($conn,$sql3);
  if ($req6) {
    $mail = new PHPMailer(true);

    try {
        // Configuration SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'vanelleflorengaminana@gmail.com'; // Remplacez par votre e-mail
        $mail->Password = 'qxhw vbfl tnnt jrod'; // Remplacez par votre mot de passe d'application
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Destinataire et expéditeur
        $mail->setFrom('vanelleflorengaminana@gmail.com', 'JobSphere');
        $mail->addAddress($email, $nom); // Ajout de l'email et du nom récupérés

        // Contenu du mail
        $mail->isHTML(true);
        $mail->Subject = "Confirmation de candidature";
        $mail->Body    = "<h1>Bonjour $nom,</h1><p>Vous avez été selectionné par l'entreprise $employname pour le poste $title , bien vouloir vous rendre au plutot  à l' entreprise.</p>";
        $mail->AltBody = "Bonjour $nom, Vous avez été selectionné par l'entreprise $employname pour le poste $title , bien vouloir vous rendre au plutot  à l' entreprise.";

        // Envoi de l'e-mail
        if ($mail->send()) {
            echo "<script>alert('Vérifiez votre email'); window.location.href='candidat.php';</script>";
        } else {
            echo "Erreur lors de l'envoi de l'e-mail.";
        }
    } catch (Exception $e) {
        echo "L'envoi de l'e-mail a échoué : {$mail->ErrorInfo}";
    }
} else {
    echo "Erreur lors de la mise à jour du statut : " . mysqli_error($conn);
}
  echo "Candidat non trouvé.";
{
  echo "Aucun ID spécifié.";
}

// Fermeture de la connexion

        $kan = mysqli_query($conn, "DELETE FROM job_application WHERE application_id=$id");
    if ($kan) {
        header("location:candidatS");
    }
  
  echo$sql3;
?>