<?php
require_once('config.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $dateActuelle = date('Y-m-d');
    $stmt = $pdo->prepare("SELECT aliments.nom, alimentation.date, alimentation.poids FROM alimentation 
                           LEFT JOIN aliments ON alimentation.id_aliment = aliments.id 
                           WHERE alimentation.id_user = :id_user AND alimentation.date = :date");
    $stmt->bindParam(':id_user', $_SESSION['user_id']);
    $stmt->bindParam(':date', $dateActuelle);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
    echo json_encode($users);
} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $stmt = $pdo->prepare("DELETE FROM alimentation WHERE poids = :poids AND date = :date ORDER BY poids LIMIT 1");
    $stmt->bindParam(':poids', $_GET['poids']);
    $stmt->bindParam(':date', $_GET['date']);
    $stmt->execute();
    http_response_code(204);
}
?>

