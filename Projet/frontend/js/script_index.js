$(document).ready(function() {
    var table = $('#usersTable').DataTable({
        ajax: {
            url: endpoint_backend + '/users.php',
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


    $('#usersTable tbody').on('click', 'tr', function() {            
        var rowData = table.row(this).data(); 
        if (rowData) {
            var id = rowData.id; 
            var type = rowData.type;
            var nom = rowData.nom;
            var calories = rowData.calories;
            var glucides = rowData.glucides;
            var form = $('<form action="info_aliment.php" method="post"></form>');
            form.append('<input type="hidden" name="id" value="' + id + '">');
            form.append('<input type="hidden" name="type" value="' + type + '">');
            form.append('<input type="hidden" name="nom" value="' + nom + '">');
            form.append('<input type="hidden" name="calories" value="' + calories + '">');
            form.append('<input type="hidden" name="glucides" value="' + glucides + '">');
            form.appendTo('body').submit();
        }
    });
});












