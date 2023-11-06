$(document).ready(function() {
    var showFormButton = document.getElementById('showFormButton');
    var formContainer = document.getElementById('formContainer');

    showFormButton.addEventListener('click', function() {
        if (formContainer.style.display === 'none' || formContainer.style.display === '') {
            formContainer.style.display = 'block';
        } else {
            formContainer.style.display = 'none';
        }
    });


    var table = $('#usersTable').DataTable({
        ajax: {
            url: 'http://localhost/projet/IDAW/projet/backend/aliments.php',
            dataSrc: ''
        },
        columns: [
            { data: 'type' },
            { data: 'nom' },
            { data: 'nutriscore' },
            { data: 'calories' },
            { data: 'glucides' },
            {
                data: null,
                render: function(data) {
                    return '<button class="edit-btn" data-id="' + data.id + '">Modifier</button> <button class="delete-btn" data-id="' + data.id + '">Supprimer</button>';
                    return '<button id="showFormButton">Modifier</button> <div id="formContainer" style="display: none;"> <form id="sqlForm">             <label for="poids">Poids en g :</label> <input type="number" id="poids" name="poids"> <input type="hidden" id="id_aliment" name="id_aliment" value="<?php echo $_POST['id']?>"> <input type="hidden" id="calories" name="calories" value="<?php echo $_POST['calories']; ?>"> <input type="submit" value="Enregistrer">             </form> </div>'
                }
            }
        ]
    });

    $('#addAlimentForm').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        addAliment(formData, table);
    });

    $('#usersTable').on('click', '.delete-btn', function() {
        var userId = $(this).data('id');
        deleteAliment(userId, table);
    });

    var modal = document.getElementById("edit_modal");

    $('#usersTable').on('click', '.edit-btn', function() {
        var alimentId = $(this).data('id');
        modal.style.display = "block";
    });

});

function addAliment(formData, table) {
    $.ajax({
        url: 'http://localhost/projet/IDAW/projet/backend/aliments.php',
        type: 'POST',
        data: formData,
        success: function(response) {
            table.ajax.reload();
        },
        error: function(xhr, status, error) {
            alert("Erreur: " + xhr.responseText);
        }
    });
}

function deleteAliment(userId, table) {
    $.ajax({
        url: 'http://localhost/projet/IDAW/projet/backend/aliments.php?id=' + userId,
        type: 'DELETE',
        success: function(response) {
            table.ajax.reload();
        },
        error: function(xhr, status, error) {
            alert("Erreur: " + xhr.responseText);
        }
    });
}

function updateAliment(formData, table, alimentId) {
    $.ajax({
        url: 'http://localhost/projet/IDAW/projet/backend/aliments.php?id=' + alimentId,
        type: 'PUT',
        data: formData,
        success: function(response) {
            table.ajax.reload();
        },
        error: function(xhr, status, error) {
            alert("Erreur: " + xhr.responseText);
        }
    });
}

/*
function prefillForm(alimentId) {
    $.ajax({
        url: 'http://localhost/IDAW/projet/backend/aliments.php?id=' + alimentId,
        type: 'GET',
        success: function(data) {
            // Remplir le formulaire de modification avec les données récupérées
            $('#editForm input[name="type"]').val(data.type);
            $('#editForm input[name="nom"]').val(data.nom);
            $('#editForm input[name="nutriscore"]').val(data.nutriscore);
            $('#editForm input[name="calories"]').val(data.calories);
            $('#editForm input[name="glucides"]').val(data.glucides);

            // Vous pouvez également stocker l'ID de l'élément dans un champ caché pour le soumettre ultérieurement
            $('#editForm input[name="id"]').val(data.id);
        },
        error: function(xhr, status, error) {
            alert("Erreur: " + xhr.responseText);
        }
    });
}
*/
