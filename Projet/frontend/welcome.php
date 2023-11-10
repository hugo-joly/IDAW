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
                    <div class="contete">
                        <div class="contetes">
                            <table id="AlimentsTable">
                                <thead>
                                    <tr>
                                        <th>nom</th>
                                        <th>date</th>
                                        <th>poids</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <div class="score">
                            <form id="dateForm">
                                <label for="dateInput">Saisissez une date :</label>
                                <input type="date" id="dateInput" required>

                                <button type="submit">Valider</button>
                            </form>
                            <div class="scosco">
                                <p>
                                    <span id="maTable" class="scoring"></span>
                                    <span class="scoring">/</span>
                                    <?php echo '<span>' . $_SESSION['objectif'] . '</span>'; ?> 
                                </p>          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script src="js/script_welcome.js"></script>
    </body>
</html>