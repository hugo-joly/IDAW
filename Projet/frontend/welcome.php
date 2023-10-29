<?php
    require_once('test_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" href="css/welcome.css" type="text/css" media="screen" title="default" charset="utf-8" />
    </head>
    <body>
        <?php
            require_once('layouts/header.php');
        ?>
        <div class="section">
            <div class="boite">
                <div class="contenu">
                    <div class="titre">
                        <div>
                            <?php echo '<img loading="lazy" src="images/'. $_SESSION['image'].'" alt="Image de Profil">'; ?>
                            
                        </div>
                        <div class="nom">
                            <?php echo '<td>' . $_SESSION['nom'] . '</td>'; ?>
                            <?php echo '<td>' . $_SESSION['prenom'] . '</td>'; ?>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
        </div>
 
    </body>
</html>