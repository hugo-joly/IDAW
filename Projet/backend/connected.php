<?php
    require_once('config.php');

    $login = "anonymous";
    $errorText = "";

    if (isset($_POST['login']) && isset($_POST['password'])) {

        $tryLogin = $_POST['login'];
        $tryPwd = $_POST['password'];    
        $sql = "SELECT * FROM users WHERE identifiant='$tryLogin' AND mdp='$tryPwd'";
        $result = $pdo->query($sql);
    
        if ($result->rowCount() > 0) {

            $row = $result->fetch(PDO::FETCH_ASSOC);
            $userID = $row['id'];
            $userNOM = $row['nom'];
            $userPRENOM = $row['prenom'];
            $userOBJECTIF = $row['objectif'];
            $userSPORT = $row['sport'];
            $userIMAGE = $row['image'];
            $sessionLifetime = 24 * 60 * 60; 
            session_set_cookie_params($sessionLifetime);
            session_start(); 
            $_SESSION['login'] = $tryLogin;
            $_SESSION['user_id'] = $userID;
            $_SESSION['nom'] = $userNOM;
            $_SESSION['prenom'] = $userPRENOM;
            $_SESSION['objectif'] = $userOBJECTIF;
            $_SESSION['sport'] = $userSPORT;
            $_SESSION['image'] = $userIMAGE;
            header('Location: ../frontend/index.php');
        } else {
            header('Location: login.php');
        }
    } else {
        $errorText = "Merci d'utiliser le formulaire de login";
    }

    $pdo->close();
?>
