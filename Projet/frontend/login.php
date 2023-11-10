<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body>
        <div class="bandeau">
            <div class="bandeau_contenu">
                <h1 class = "elem_centered">MON REGIME POINT COM</h1>
                <p class="elem_centered">Veuillez vous connecter...</p>
            </div>
        </div>
        <div class="login_centered">
        <form id="login_form" action="../backend/connected.php" method="POST">
            <table class="login_form">
                <tr>
                    <th class = "login_field">Login :</th>
                    <td><input type="text" name="login"></td>
                </tr>
                <tr>
                    <th class= "login_field">Mot de passe :</th>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Se connecter..." class="login_button"/></td>
                </tr>
            </table>
        </form>
        </div>
    </body>
</html>
