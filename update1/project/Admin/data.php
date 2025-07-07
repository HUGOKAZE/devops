<?php
session_start();
header('Content-Type: application/json');

$id = $_SESSION['user_id'];
$pdo = mysqli_connect("localhost", "root", "", "job");

if (!$pdo) {
    die(json_encode(["error" => "Connection failed: " . mysqli_connect_error()]));
}

// Requête pour récupérer les données nécessaires au graphique
$query = "SELECT 
            DATE_FORMAT(datet, '%M') as mois, 
            SUM(montant) as chiffre_affaire 
          FROM selected 
          WHERE ident = $id
          GROUP BY MONTH(datet)
          ORDER BY MONTH(datet)";

$result = mysqli_query($pdo, $query);

if (!$result) {
    die(json_encode(["error" => "Query failed: " . mysqli_error($pdo)]));
}

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);

mysqli_close($pdo);
?>