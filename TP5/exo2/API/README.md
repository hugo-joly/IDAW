Les endpoints disponibles sur on API sont les suivants :

-- Méthode GET :

    /users.php :

    Permet de renvoyer tous les utilisateurs enregistrés dans la base de données sous le format JSON.
    Format d'un utilisateur :
    {"id": "exemple_id", "name":"exemple_name", "email":"exemple_email"}.
    ----------------------------------
    /user.php?id=exemple_id :
    Permet de récupérer les données de l'utilisateur au format JSON dont l'id a été entré en paramètre de la requête.

    Si l'id de l'utilisateur n'a pas été fourni, la réponse http est un code d'erreur 400 (Bad Request).
    Si l'id fourni n'est pas dans la base de donnée, la réponse http est un code d'erreur 404 (Not Found).
    Si la requête est bonne, la réponse http est un code 200 (OK) ainsi que l'utilisateur demandé au format JSON.

-- Méthode POST :

    /users.php :

    Permet de créer un nouvel utilisateur dans la base de données en précisant le nom et l'email de l'utilisateur au format JSON
    dans le corps de la requête. L'id du nouvel utilisateur est attribué automatiquement par le serveur. 
    
    Si l'un ou l'autre des paramètres (nom et email) n'a pas été spécifié, la réponse http est un code d'erreur 400 (Bad Request).
    Si la requête est bonne, le nouvel utilisateur est renvoyé au format JSON.

-- Méthode PUT :

    /users.php :

    Permet de mettre à jour les données de l'utilisateur dont on spécifie l'identifiant dans le corps de la requête au format JSON.
    On peut modifier seulement son nom, seulement son email ou les deux à la fois.

    Si aucun des deux paramètres (nom, email) n'a été spécifié dans la requête, la réponse http est un code d'erreur 400 (Bad Request).
    Si la requête est bonne, l'utilisateur mis à jour est renvoyé au format JSON.

-- Méthode DELETE :

    /users.php :

    Permet de supprimer l'utilisateur dont l'id a été spécifié dans le corps de la requête au format JSON de la base de données.  

    Si l'id de l'utilisateur n'a pas été fourni, la réponse http est un code d'erreur 400 (Bad Request).
    Si l'id fourni n'est pas dans la base de donnée, la réponse http est un code d'erreur 404 (Not Found).
    Si la requête est bonne, la réponse http est un code 204 (No Content) car l'utilisateur a été supprimé avec succès.