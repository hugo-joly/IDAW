
$(document).ready(function() {
    
    var table = $('#AlimentsTable').DataTable({
        ajax: {
            url: endpoint_backend + '/welcome.php',
            dataSrc: ''
        },
        columns: [
            { data: 'nom' },
            { data: 'date' },
            { data: 'poids' },
            {
                data: null,
                render: function(data) {
                    return '<button class="delete-btn" data-nom="' + data.nom + '" data-date="' + data.date + '" data-poids="' + data.poids + '">Supprimer</button>';
                }
            }
        ]
    });
    chargerDonneesDansTable();

    $('#AlimentsTable').on('click', '.delete-btn', function() {
        var userNom = $(this).data('nom');
        var userDate = $(this).data('date');
        var userPoids = $(this).data('poids');
        deleteAliment(userPoids, userNom, userDate, table);
        console.log(userDate);
    });

});

function chargerDonneesDansTable() {
    $.ajax({
        url: endpoint_backend + '/score.php', 
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            afficherDonneesDansTable(data);
        },
        error: function(error) {
            console.error('Erreur lors de la requête AJAX:', error);
        }
    });
}

function afficherDonneesDansTable(data) {
    var tbody = $('#maTable');
    tbody.empty();
    data.forEach(function(element) {
        var newRow = $('<span>');
        newRow.append('<span id="somme">' + element.sommePoids + '</span>');
        tbody.append(newRow);
    });
}

function deleteAliment(userPoids, userNom, userDate, table) {
    $.ajax({
        url: endpoint_backend + '/welcome.php?poids=' + userPoids + '&nom=' + userNom + '&date=' + userDate,
        type: 'DELETE',
        success: function(response) {
            table.ajax.reload();
        },
        error: function(xhr, status, error) {
            alert("Erreur: " + xhr.responseText);
        }
    });
}

document.getElementById('dateForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var selectedDate = document.getElementById('dateInput').value;
    $.ajax({
        url: endpoint_backend + '/score_2.php?date=' + selectedDate, 
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            afficherDonneesDuJour(data);
        },
        error: function(error) {
            console.error('Erreur lors de la requête AJAX:', error);
        }
    });
});


function afficherDonneesDuJour(data) {
    var tbody = $('#maTable');
    tbody.empty();
    data.forEach(function(element) {
        console.log(element);
        var newRow = $('<span>');
        newRow.append('<span id="somme">' + element.sommePoids + '</span>');
        tbody.append(newRow);
    });

}