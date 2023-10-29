<?php
    require_once('test_connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
    
    <link rel="stylesheet" type="text/css" href="StyleTable.css">
</head>

<body>
    <table id="usersTable" class="display">
        <thead>
            <tr>
                <th>type</th>
                <th>nom</th>
                <th>multiscore</th>
                <th>calories</th>
                <th>glucides</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="js/script_index.js"></script>
</body>

</html>