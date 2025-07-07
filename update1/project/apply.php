<?php
session_start();
$idu = $_SESSION['user_id'];
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'job';
$id = $_GET['id'];
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Requête pour récupérer les informations du poste
$sel = "SELECT * FROM job_post WHERE job_post_id = $id";
$ro = mysqli_query($conn, $sel);

if (!$ro) {
    die("Erreur dans la requête: " . mysqli_error($conn));
}

$po = mysqli_fetch_assoc($ro);
$idpost = $po['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDir = "uploads/";
    $allowedTypes = [
        'pdf' => 'application/pdf',
        'doc' => 'application/msword',
        'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
    ];
    $maxFileSize = 5 * 1024 * 1024; // 5MB

    if (isset($_FILES["file"])) {
        if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
            $fileName = $_FILES["file"]["name"];
            $fileTmpName = $_FILES["file"]["tmp_name"];
            $fileSize = $_FILES["file"]["size"];
            $fileType = $_FILES["file"]["type"];

            if ($fileSize > $maxFileSize) {
                die("Erreur : Le fichier est trop volumineux (max 5MB).");
            }

            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            
            if (!array_key_exists($fileExt, $allowedTypes) || !in_array($fileType, $allowedTypes)) {
                die("Erreur : Seuls les fichiers PDF, DOC et DOCX sont autorisés.");
            }

            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $detectedType = finfo_file($finfo, $fileTmpName);
            finfo_close($finfo);
            
            if (!in_array($detectedType, $allowedTypes)) {
                die("Erreur : Type de fichier non autorisé.");
            }

            // Nettoyer le nom du fichier pour la sécurité
            $cleanFileName = preg_replace("/[^a-zA-Z0-9_.-]/", "_", basename($fileName));
            
            // Vérifier si le fichier existe déjà et ajouter un suffixe si nécessaire
            $counter = 1;
            $originalName = pathinfo($cleanFileName, PATHINFO_FILENAME);
            $extension = pathinfo($cleanFileName, PATHINFO_EXTENSION);
            
            while (file_exists($uploadDir . $cleanFileName)) {
                $cleanFileName = $originalName . "_" . $counter . "." . $extension;
                $counter++;
            }
            
            $uploadPath = $uploadDir . $cleanFileName;

            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            if (move_uploaded_file($fileTmpName, $uploadPath)) {
                // Vérification finale du fichier
                if (!file_exists($uploadPath)) {
                    die("Erreur : Le fichier n'a pas été correctement enregistré.");
                }

                $title = $_POST['title'] ?? '';
                $description = $_POST['description'] ?? '';
                
                $title = mysqli_real_escape_string($conn, $title);
                $description = mysqli_real_escape_string($conn, $description);
                
                // Stocker $cleanFileName (nom original nettoyé) dans la base de données
                $stmt = "INSERT INTO job_application 
                        (candidate_id, employer_id, cv_build, idjob) 
                        VALUES ($idu, $idpost, '$cleanFileName', $id)";
                
                $tro = mysqli_query($conn, $stmt);
                
                if ($tro) {
                  header("location:jobs.php")
                } else {
                    unlink($uploadPath);
                    die("Erreur lors de l'enregistrement dans la base de données: " . mysqli_error($conn));
                }
            } else {
                echo "Erreur lors de l'upload du fichier.";
            }
        } else {
            echo "Erreur d'upload: " . getUploadError($_FILES["file"]["error"]);
        }
    }
}

function getUploadError($errorCode) {
    switch ($errorCode) {
        case UPLOAD_ERR_INI_SIZE: return "Le fichier dépasse la taille maximale autorisée par le serveur.";
        case UPLOAD_ERR_FORM_SIZE: return "Le fichier dépasse la taille maximale spécifiée dans le formulaire.";
        case UPLOAD_ERR_PARTIAL: return "Le fichier n'a été que partiellement uploadé.";
        case UPLOAD_ERR_NO_FILE: return "Aucun fichier n'a été uploadé.";
        case UPLOAD_ERR_NO_TMP_DIR: return "Dossier temporaire manquant.";
        case UPLOAD_ERR_CANT_WRITE: return "Échec de l'écriture du fichier sur le disque.";
        case UPLOAD_ERR_EXTENSION: return "Une extension PHP a arrêté l'upload du fichier.";
        default: return "Erreur d'upload inconnue.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Upload de fichiers PDF/Word</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], textarea { width: 100%; padding: 8px; }
        textarea { height: 80px; }
    </style>
</head>
<body>
    <h2>Uploader un fichier PDF ou Word</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Titre du document:</label>
            <input type="text" name="title" id="title" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea>
        </div>
        
        <div class="form-group">
            <label for="file">Fichier (PDF, DOC ou DOCX, max 5MB):</label>
            <input type="file" name="file" id="file" required accept=".pdf,.doc,.docx">
        </div>
        
        <div class="form-group">
            <input type="submit" value="Uploader">
        </div>
    </form>
</body>
</html>