<?php
    require_once('header.php');
    require_once('menu.php');
    require_once('../backend/config.php');
    $currentPageId = 'info_aliment';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    } 

    renderMenuToHTML($currentPageId);
?> 
                <div class="box_centered">
                    <div class="info_aliment">
                        <?php echo '<p><B>Type : </B>' . $_POST['type'] . '</p>'; ?>
                        <?php echo '<p><B>Nom : </B>' . $_POST['nom'] . '</p>'; ?>
                        <?php echo '<p><B>Calories : </B>' . $_POST['calories'] . '</p>'; ?>
                        <?php echo '<p><B>Glucides : </B>' . $_POST['glucides'] . '</p>'; ?>
                        <button id="showFormButton" class="eat_button" >Manger</button>
                        <div id="formContainer" style="display: none;">
                            <form id="sqlForm">
                                <label for="poids"><br><B>Poids pour 100g :</B></label>
                                <input type="number" id="poids" name="poids">
                                <input type="hidden" id="id_aliment" name="id_aliment" value="<?php echo $_POST['id']?>">
                                <input type="hidden" id="calories" name="calories" value="<?php echo $_POST['calories']; ?>">
                                <input type="submit" value="Enregistrer" class = "save_button">
                            </form>
                        </div>
                    </div>
                </div>

        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/script_info.js"></script>
    </body>
</html>