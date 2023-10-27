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

    <form id="addUserForm">
        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required><br><br>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>
        <label for="multiscore">multiscore:</label>
        <input type="text" id="multiscore" name="multiscore" required><br><br>
        <label for="calories">Calories:</label>
        <input type="number" id="calories" name="calories" required><br><br>
        <label for="glucides">Glucides:</label>
        <input type="number" id="glucides" name="glucides" required><br><br>
        <label for="image">Url:</label>
        <input type="text" id="image" name="image"><br><br>

        <button type="submit">Ajouter Aliments</button>
    </form>

    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="script.js"></script>
</body>

</html>