<?php

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

//Ajout d'une entrée------------------------------------------
$opt1 = NULL;
$opt2 = NULL;

if (isset($_POST['name'])){
    $opt1 = $_POST['name'];
}

if (isset($_POST['email'])){
    $opt2 = $_POST['email'];
}    

if($opt1 != NULL || $opt2 != NULL){
    $pdo->exec("INSERT INTO `users` (`id`, `name`, `email`) VALUES 
    (NULL, '$opt1', '$opt2');");
}
//------------------------------------------------------------

$request = $pdo->prepare("select * from users");

// TODO: add your code here
// retrieve data from database using fetch(PDO::FETCH_OBJ) and
// display them in HTML array

$request->execute();
$table = $request->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
require_once('header.php');

echo('<h2>Users</h2>');
echo('<table>');
echo('<tr> <td><B>Id</B></td> <td><B>Nom</B></td> <td><B>Email<B/></td> <td><B>Actions</B></td> </tr>');
foreach($table as $data){
    echo('<tr> <td> '. $data['id']. ' </td> <td> '. $data['name']. ' </td> <td> '. $data['email']. ' </td> <td><form id="modify" action="users.php" method="POST">

    <input type="hidden" name="id" value="'.$data['id'].'">
    <input type="submit" value="Modifier" />

</form></td></tr>');
}
echo('</table>');
?>

<form id="create" action="users.php" method="POST">

    <label for="name">Nom :</label>
    <input type="text" name="name" id="name" />

    <label for="email">Email :</label>
    <input type="text" name="email" id="email" />


    <input type="submit" value="Ajouter" />

</form>

<?php

/*** close the database connection ***/
$pdo = null;

    require_once('footer.php');
?>