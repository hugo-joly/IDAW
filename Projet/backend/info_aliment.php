<?php
    require_once('config.php');
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $condition = true;

        

        $dateActuelle = date('Y-m-d');
        $poids = intval($_POST['poids']) * intval($_POST['calorie']);
        
        $stmt = $pdo->prepare("INSERT INTO alimentation (id_user, id_aliment, date, poids) VALUES (:id_user, :id_aliment, :date, :poids)");
        $stmt->bindParam(':id_user', $_SESSION['user_id']);
        $stmt->bindParam(':date', $dateActuelle);
        $stmt->bindParam(':id_aliment', $_POST['id_aliment']);
        $stmt->bindParam(':poids', $poids);
        $stmt->execute();
        http_response_code(201);
    }
?>
