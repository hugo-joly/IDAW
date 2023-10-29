

<?php
    require_once('test_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" href="css/info_aliment.css" type="text/css" media="screen" title="default" charset="utf-8" />
    </head>
    <body>
        <div class="section">
            <div class="boite">
                <div class="contenu">
                    <div class="titre">
                        <?php echo '<p>' . $_POST['type'] . '</p>'; ?>
                        <?php echo '<p>' . $_POST['nom'] . '</p>'; ?>
                    </div>
                    <div>
                        <?php echo '<p>' . $_POST['calories'] . '</p>'; ?>
                        <?php echo '<p>' . $_POST['glucides'] . '</p>'; ?>
                    </div>
                    <div>
                        <button id="showFormButton">Manger</button>
                        <div id="formContainer" style="display: none;">
                            <form id="sqlForm">
                                <label for="poids">Poids en g :</label>
                                <input type="number" id="poids" name="poids">
                                <input type="hidden" id="id_aliment" name="id_aliment" value="<?php echo $_POST['id']?>">
                                <input type="hidden" id="calories" name="calories" value="<?php echo $_POST['calories']; ?>">
                                <input type="submit" value="Enregistrer">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/script_info.js"></script>
    </body>
</html>