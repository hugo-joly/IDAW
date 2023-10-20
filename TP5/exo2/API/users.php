<?php
require_once('init_pdo.php');

switch($_SERVER['REQUEST_METHOD']) {
    
    case 'GET' : //Obtenir tous les utilisateurs
        $request = $pdo->query("select * from users");
        //$request->execute();
        $results = $request->fetchAll(PDO::FETCH_ASSOC);

        header("Content-Type: application/json; charset=UTF-8");
        echo json_encode($results,JSON_UNESCAPED_UNICODE);

    case 'POST' : //Create

        $parameters = json_decode(file_get_contents('php://input'));

        if (isset($parameters->name) && isset($parameters->email)){
            $name = $parameters->name;
            $email = $parameters->email;

            $request = $pdo->prepare("INSERT INTO `users` (`id`, `name`, `email`) VALUES (NULL, '$name', '$email');");
            $request->execute();

            $table = $pdo->prepare("SELECT * FROM `users`;");
            $table->execute();
            $users = $table->fetchAll(PDO::FETCH_ASSOC);
            $created_user = end($users);

            header("Content-Type: application/json; charset=utf-8");
            http_response_code(201);
            echo json_encode($created_user,JSON_UNESCAPED_UNICODE);
        }
        else {
            header("Content-Type: application/json; charset=utf-8");
            http_response_code(400);
        }



    case 'PUT' : //Update un nom OU un email OU les deux

        $parameters = json_decode(file_get_contents('php://input'));
        
        $name = NULL;
        $email = NULL;
        $id = $parameters->id;

        if (isset($parameters->name)){
            $name = $parameters->name;
        }

        if(isset($parameters->email)){
            $email = $parameters->email;
        }

        if ($name != NULL){
            $request_name = $pdo->prepare("UPDATE `users` SET `name` = '$name' WHERE `users`.`id` = '$id';");
            $request_name->execute();
        }

        if ($email != NULL){
            $request_email = $pdo->prepare("UPDATE `users` SET `email` = '$email' WHERE `users`.`id` = '$id';");
            $request_email->execute();
        }

        $request_updated = $pdo->prepare("SELECT * FROM `users` WHERE `id`='$id';");
        $request_updated->execute();
        $result = $request_updated->fetchAll(PDO::FETCH_ASSOC);
        
        if($name == NULL && $email == NULL){
            header("Content-Type: application/json; charset=utf-8");
            http_response_code(400);
        }

        else{
            header("Content-Type: application/json; charset=utf-8");
            http_response_code(201);
            echo json_encode($result, JSON_UNESCAPED_UNICODE);
        }

    case 'DELETE' : //Supprime l'utilisateur dont on fourni l'identifiant

        $parameters = json_decode(file_get_contents('php://input'));

        $userId = $parameters->id; 

        if (isset($userId)) {
            $request = $pdo->prepare("DELETE FROM `users` WHERE `id` = $userId;");
            $request->execute();

            $rowCount = $request->rowCount();
            if ($rowCount > 0) {
                header("Content-Type: application/json; charset=utf-8");
                http_response_code(204);
            }
            else {
                header("Content-Type: application/json; charset=utf-8");
                http_response_code(404); 
            }
        } 
        
        else {
            header("Content-Type: application/json; charset=utf-8");
            http_response_code(400);
        }
}
?>

