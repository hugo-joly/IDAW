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

