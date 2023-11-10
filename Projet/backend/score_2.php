<?php
require_once('config.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['date'])) {
        $dateActuelle = $_GET['date'];
    } else {
        $dateActuelle = date('Y-m-d');
    }
    $stmt = $pdo->prepare("SELECT SUM(alimentation.poids) as sommePoids FROM alimentation 
                           WHERE alimentation.id_user = :id_user AND alimentation.date = :date");
    $stmt->bindParam(':id_user', $_SESSION['user_id']);
    $stmt->bindParam(':date', $dateActuelle);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
    echo json_encode($users);
}

?>
