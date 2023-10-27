
<?php
    require_once('config.php');

    
    $dbName = "projet";

    $pdo->exec("DROP DATABASE IF EXISTS $dbName");

    $pdo->exec("CREATE DATABASE $dbName");

    $pdo->exec("USE $dbName");

    $sqlFile = 'sql/create_db.sql';
    
    $sql = file_get_contents($sqlFile);
    
    $pdo->exec($sql);
    
    echo "Initialisation de la base de données réussie.";

?>
