<?php
    require_once('config.php');
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id'])) {
            $stmt = $pdo->prepare("SELECT * FROM aliments WHERE id = :id");
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute(); 
            $aliment = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($aliment);
            http_response_code(200);
        }
        else {
        $stmt = $pdo->prepare("SELECT * FROM aliments WHERE id_user=:id_user");
        $stmt->bindParam(':id_user', $_SESSION['user_id']);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($users);
        }
    }  elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['type']) && isset($_POST['nom'])) {
            $stmt = $pdo->prepare("INSERT INTO aliments (id_user, type, nom, nutriscore, calories, glucides, image) VALUES (:id_user, :type, :nom, :nutriscore, :calories, :glucides, :image)");
            $stmt->bindParam(':id_user', $_SESSION['user_id']);
            $stmt->bindParam(':type', $_POST['type']);
            $stmt->bindParam(':nom', $_POST['nom']);
            $stmt->bindParam(':nutriscore', $_POST['nutriscore']);
            $stmt->bindParam(':calories', $_POST['calories']);
            $stmt->bindParam(':glucides', $_POST['glucides']);
            $stmt->bindParam(':image', $_POST['image']);
            $stmt->execute();
            http_response_code(201);
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "Données invalides, veuillez fournir un nom et un type"));
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
    } elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $stmt = $pdo->prepare("UPDATE aliments SET id_user = :id_user, type = :type, nom = :nom, nutriscore = :nutriscore, calories = :calories, glucides = :glucides, image = :image WHERE id = :id");
            $stmt->bindParam(':id_user', $_SESSION['user_id']);
            $stmt->bindParam(':type', $_PUT['type']);
            $stmt->bindParam(':nom', $_PUT['nom']);
            $stmt->bindParam(':nutriscore', $_PUT['nutriscore']);
            $stmt->bindParam(':calories', $_PUT['calories']);
            $stmt->bindParam(':glucides', $_PUT['glucides']);
            $stmt->bindParam(':image', $_PUT['image']);
            $stmt->execute();
            http_response_code(201);
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "ID de l'aliment manquant"));
        }
    }
?>


