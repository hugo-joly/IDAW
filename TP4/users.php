<?php
require_once('header.php');
require_once('config.php');

$connectionString = "mysql:host=". _MYSQL_HOST;

if(defined('_MYSQL_PORT'))
    $connectionString .= ";port=". _MYSQL_PORT;

$connectionString .= ";dbname=" . _MYSQL_DBNAME;
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );

$pdo = NULL;
try {
    $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $erreur) {
       echo 'Erreur : '.$erreur->getMessage();
}

$request = $pdo->prepare("select * from users");

// TODO: add your code here
// retrieve data from database using fetch(PDO::FETCH_OBJ) and
// display them in HTML array

$request->execute();
$table = $request->fetchAll(PDO::FETCH_ASSOC);

echo('<h2>Users</h2>');
echo('<table>');
echo('<tr> <td>Id</td> <td>Nom</td> <td>Email</td> </tr>');
foreach($table as $data){
    echo('<tr> <td> '. $data['id']. ' </td> <td> '. $data['name']. ' </td> <td> '. $data['email']. ' </td> </tr>');
}
echo('</table>');

/*** close the database connection ***/
$pdo = null;

require_once('footer.php');
?>