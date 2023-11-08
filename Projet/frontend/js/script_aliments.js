$(document).ready(function() {
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
        //prefillForm(alimentId);
        modal.style.display = "block";
        $('#editAlimentForm').submit(function(event) {
            event.preventDefault();
            var formData = $(this).serialize();
            updateAliment(formData, table, alimentId);
            modal.style.display = "none";
        });
    });

    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
        modal.style.display = "none" ;
    }

    $('#editAlimentForm').submit(function(event) {
        event.preventDefault();
        var alimentId = $(this).data('id');
        var formData = $(this).serialize();
        updateAliment(formData, table, alimentId);
        modal.style.display = "none";
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


function prefillForm(alimentId) {
    $.ajax({
        url: 'http://localhost/IDAW/projet/backend/aliments.php?id=' + alimentId,
        type: 'GET',
        success: function(data) {
            $('#editForm input[id="edit_type"]').val(data.type);
            $('#editForm input[id="edit_nom"]').val(data.nom);
            $('#editForm input[id="edit_nutriscore"]').val(data.nutriscore);
            $('#editForm input[id="edit_calories"]').val(data.calories);
            $('#editForm input[id="edit_glucides"]').val(data.glucides);
            $('#editForm input[id="edit_image"]').val(data.image);
            $('#editForm input[id="edit_id"]').val(data.id);
        },
        error: function(xhr, status, error) {
            alert("Erreur: " + xhr.responseText);
        }
    });
}

