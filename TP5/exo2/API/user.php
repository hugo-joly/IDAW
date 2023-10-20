<?php

//Read - Obtenir un utilisateur en fonction de son ID

require_once('init_pdo.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $request=$pdo->prepare("SELECT * FROM `users` WHERE `id`='$id';");
    $request->execute();
    $row_count = $request->rowCount();
    $user = $request->fetchAll(PDO::FETCH_ASSOC);

    if ($row_count === 0) {
        header("Content-Type: application/json; charset=utf-8");
        http_response_code(404);
    }
    else {
        header("Content-Type: application/json; charset=utf-8");
        http_response_code(200);
        echo json_encode($user,JSON_UNESCAPED_UNICODE);
    }
}

else{
    header("Content-Type: application/json; charset=utf-8");
    http_response_code(400);
    echo json_encode('Must enter an id as a parameter in the URL',JSON_UNESCAPED_UNICODE);
}