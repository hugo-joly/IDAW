<?php
    require_once('config.php');
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $stmt = $pdo->prepare("SELECT * FROM aliments WHERE id_user=:id_user");
        $stmt->bindParam(':id_user', $_SESSION['user_id']);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($users);
    }  elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['type']) && isset($_POST['nom'])) {
            $stmt = $pdo->prepare("INSERT INTO aliments (id_user, type, nom, multiscore, calories, glucides, image) VALUES (:id_user, :type, :nom, :multiscore, :calories, :glucides, :image)");
            $stmt->bindParam(':id_user', $_SESSION['user_id']);
            $stmt->bindParam(':type', $_POST['type']);
            $stmt->bindParam(':nom', $_POST['nom']);
            $stmt->bindParam(':multiscore', $_POST['multiscore']);
            $stmt->bindParam(':calories', $_POST['calories']);
            $stmt->bindParam(':glucides', $_POST['glucides']);
            $stmt->bindParam(':image', $_POST['image']);
            $stmt->execute();
            http_response_code(201);
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "Données invalides, veuillez fournir un nom et un email"));
        }
    } elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        $id = $_GET['id'] ?? null;
        if ($id) {
                $stmt = $pdo->prepare("DELETE FROM aliments WHERE id = :id");
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                http_response_code(204);
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "ID d'utilisateur manquant"));
        }
    }
?>


