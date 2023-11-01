$(document).ready(function() {
    var table = $('#AlimentsTable').DataTable({
        ajax: {
            url: 'http://localhost/IDAW/projet/backend/welcome.php',
            dataSrc: ''
        },
        columns: [
            { data: 'nom' },
            { data: 'date' },
            { data: 'poids' }
        ]
    });
});



