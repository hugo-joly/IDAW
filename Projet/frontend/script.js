$(document).ready(function() {
    var table = $('#usersTable').DataTable({
        ajax: {
            url: 'http://localhost/IDAW/projet/backend/users.php',
            dataSrc: ''
        },
        columns: [
            { data: 'type' },
            { data: 'nom' },
            { data: 'nutriscore' },
            { data: 'calories' },
            { data: 'glucides' }
        ]
    });
    $('#addUserForm').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        addUser(formData, table);
    });

});

function addUser(formData, table) {
    $.ajax({
        url: 'http://localhost/IDAW/projet/backend/users.php',
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