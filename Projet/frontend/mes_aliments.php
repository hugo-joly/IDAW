
    

    <div class="sec">
        <div class="conteneur">
            <table id="usersTable" class="display">
                <thead>
                    <tr>
                        <th>type</th>
                        <th>nom</th>
                        <th>nutriscore</th>
                        <th>calories</th>
                        <th>glucides</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>


    <div>
        <div>
            <p>

            </p>
            <img loading="lazy" src="images/plat.svg" class="nourriture_svg" alt="Image de nourriture">
        </div>
    </div>

    <form id="addAlimentForm">
        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required><br><br>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>
        <label for="nutriscore">nutriscore:</label>
        <input type="text" id="nutriscore" name="nutriscore" required><br><br>
        <label for="calories">Calories:</label>
        <input type="number" id="calories" name="calories" required><br><br>
        <label for="glucides">Glucides:</label>
        <input type="number" id="glucides" name="glucides" required><br><br>
        <label for="image">Url:</label>
        <input type="text" id="image" name="image"><br><br>

        <button type="submit">Ajouter Aliments</button>
    </form>

    <div id="edit_modal" class="modal">
        <div class = "modal-content">
            <span class="close">&times;</span>
            <form id="editForm" method="put">
                <label for="edit_type">Type:</label>
                <input type="text" id="edit_type"><br><br>
                <label for="edit_nom">Nom:</label>
                <input type="text" id="edit_nom"><br><br>
                <label for="edit_nutriscore">nutriscore:</label>
                <input type="text" id="edit_nutriscore"><br><br>
                <label for="edit_calories">Calories:</label>
                <input type="number" id="edit_calories"><br><br>
                <label for="edit_glucides">Glucides:</label>
                <input type="number" id="edit_glucides"><br><br>
                <label for="edit_image">Url:</label>
                <input type="text" id="edit_image"><br><br>
                <input type="hidden" id= "edit_id">

                <button type="submit">Enregistrer</button>
            </form>
        </div>
    </div>
    <script>var endpointPrefix = "<?php echo json_encode(ENDPOINT_PREFIX); ?>";</script>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="js/script_aliments.js"></script>
</body>

</html>