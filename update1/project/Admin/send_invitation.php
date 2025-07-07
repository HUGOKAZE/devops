<?php
header('Content-Type: application/json; charset=utf-8');
ini_set('log_errors', 1);
ini_set('error_log', __DIR__.'/email_errors.log');

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$response = ['success' => false, 'error' => ''];

try {
    // Récupération sécurisée des données
    $data = json_decode(file_get_contents('php://input'), true) ?: $_POST;
    $data = array_map('trim', $data);
    
    // Validation rigoureuse
    if (empty($data['meeting_url']) || !filter_var($data['meeting_url'], FILTER_VALIDATE_URL)) {
        throw new Exception('URL de réunion invalide');
    }
    
    if (empty($data['candidate_email']) || !filter_var($data['candidate_email'], FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Email du candidat invalide');
    }

    $mail = new PHPMailer(true);
    
    // Configuration SMTP professionnelle
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io'; // Service SMTP de test
    $mail->SMTPAuth = true;
    $mail->Username = '1234567890abcdef'; // Remplacez par vos identifiants
    $mail->Password = '1234567890abcdef';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 2525;
    $mail->Timeout = 10; // Timeout court pour éviter les blocages

    // Encodage sécurisé
    $mail->CharSet = 'UTF-8';
    
    // Expéditeur professionnel
    $mail->setFrom('recrutement@votredomaine.com', 'Service Recrutement');
    $mail->addReplyTo('contact@votredomaine.com', 'Contact');
    $mail->addAddress($data['candidate_email']);

    // Contenu clair et professionnel
    $mail->isHTML(false);
    $mail->Subject = 'Invitation à votre entretien vidéo';
    $mail->Body = sprintf(
        "Bonjour,\n\n".
        "Nous confirmons votre entretien vidéo.\n\n".
        "Lien pour rejoindre la réunion : %s\n\n".
        "Rejoignez 5 minutes avant l'horaire prévu.\n\n".
        "Cordialement,\nL'équipe de recrutement",
        $data['meeting_url']
    );

    // Envoi avec vérification
    if (!$mail->send()) {
        throw new Exception('Erreur PHPMailer: '.$mail->ErrorInfo);
    }

    $response['success'] = true;
    
} catch (Exception $e) {
    error_log('['.date('Y-m-d H:i:s').'] '.$e->getMessage());
    $response['error'] = 'Impossible d\'envoyer l\'invitation';
    
    // Message détaillé uniquement en mode développement
    if ($_SERVER['SERVER_NAME'] === 'localhost') {
        $response['debug'] = $e->getMessage();
    }
}

exit(json_encode($response));