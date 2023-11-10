$(document).ready(function() {
    var table = $('#usersTable').DataTable({
        ajax: {
            url: endpoint_backend + '/aliments.php',
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
                    return '<button class="edit-btn" data-id="' + data.id + '" data-type="' + data.type + '" data-nom="' + data.nom + '" data-nutriscore="' + data.nutriscore + '" data-calories="' + data.calories + '" data-glucides="' + data.glucides + '" data-image="' + data.image + '">Modifier</button> <button class="delete-btn" data-id="' + data.id + '">Supprimer</button>';
                }
            }
        ]
    });

    var showFormButton = document.getElementById('showFormButton');
    var formContainer = document.getElementById('formContainer');

    showFormButton.addEventListener('click', function() {
        if (formContainer.style.display === 'none' || formContainer.style.display === '') {
            formContainer.style.display = 'block';
        } else {
            formContainer.style.display = 'none';
        }
    });

    $('#addAlimentForm').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        addAliment(formData, table);
        document.getElementById("addAlimentForm").reset();
    });







    $('#usersTable').on('click', '.delete-btn', function() {
        var userId = $(this).data('id');
        deleteAliment(userId, table);
    });



    var modal = document.getElementById("edit_modal");

    $('#usersTable').on('click', '.edit-btn', function() {
        
        var formulaire = document.getElementById('editForm');
        var alimentId = $(this).data('id');
        var userType = $(this).data('type');
        var userNom = $(this).data('nom');
        var userNutriscore = $(this).data('nutriscore');
        var userCalories = $(this).data('calories');
        var userGlucides = $(this).data('glucides');
        var userImage = $(this).data('image');
        
        formulaire.elements["nom"].value = userNom;
        formulaire.elements["type"].value = userType;
        formulaire.elements["nutriscore"].value = userNutriscore;
        formulaire.elements["calories"].value = userCalories;
        formulaire.elements["glucides"].value = userGlucides;
        formulaire.elements["image"].value = userImage;
        modal.style.display = "block";

        $('#editForm').submit(function(event) {
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






