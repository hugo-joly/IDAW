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
                    
                    <div>
                        <table id="AlimentsTable">
                            <thead>
                                <tr>
                                    <th>nom</th>
                                    <th>date</th>
                                    <th>poids</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                        <?php require_once('components/conteur.php') ?>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script src="js/script_welcome.js"></script>
    </body>
</html>