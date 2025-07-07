

<?php
// Inclusion de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require dirname(__DIR__) . '/vendor/autoload.php';

// Connexion à la base de données
$localhost = "localhost";
$dbuser = "root";
$dbname = "job";
$dbpassword = "";
$conn = mysqli_connect($localhost, $dbuser, $dbpassword, $dbname);

if (!$conn) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}

// Récupération de l'ID passé en paramètre
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sécurisation de l'ID

    // Récupérer le nom et l'email du candidat
    $sql1 = "SELECT u.name, u.email
    FROM job_application j
    JOIN user u ON j.candidate_id = u.user_id
    WHERE j.application_id = $id";

$sql2 = "SELECT e.name, p.title
FROM job_application j
JOIN user e ON j.employer_id = e.user_id
JOIN job_post p ON j.idjob = p.job_post_id
WHERE j.application_id = $id";



 
    $result = mysqli_query($conn, $sql1);
  $result1 = mysqli_query($conn, $sql2);

// Vérification des résultats
if (!$result || !$result1) {
    die("Erreur SQL : " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
$row1 = mysqli_fetch_assoc($result1);
    if ($row && $row1 ) {
        $nom = $row['name'];
        $email = $row['email'];
        $title = $row1['title'];
        $employname = $row1['name'];
        // Mettre à jour le statut
        $sql = "UPDATE job_application SET statut = 1 WHERE application_id = $id";
        if (mysqli_query($conn, $sql)) {

            // Initialisation de PHPMailer
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
                $mail->Body    = "<h1>Bonjour $nom,</h1><p>Vous avez été preselectionné par l'entreprise $employname pour le poste $title , on vous attend dans 2 jours à 8h:00h à l' entreprise.</p>";
                $mail->AltBody = "Bonjour $nom, Vous avez été preselectionné par l'entreprise $employname pour le poste $title , on vous attend dans 2 jours à 8h:00h à l' entreprise.";

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
    } else {
        echo "Candidat non trouvé.";
    }
} else {
    echo "Aucun ID spécifié.";
}

// Fermeture de la connexion
mysqli_close($conn);
?>
