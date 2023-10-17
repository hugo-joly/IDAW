<?php
require_once('init_pdo.php');

//Ajout d'une entrée-----------------------------------------------
$opt1 = NULL;
$opt2 = NULL;

if (isset($_POST['name'])){
    $opt1 = $_POST['name'];
}

if (isset($_POST['email'])){
    $opt2 = $_POST['email'];
}    

if($opt1 != NULL && $opt2 != NULL){
    $pdo->exec("INSERT INTO `users` (`id`, `name`, `email`) VALUES 
    (NULL, '$opt1', '$opt2');");
}
//-----------------------------------------------------------------

//Modification d'une entrée (possibilité de modifier un seul des deux champs)------------------------
$opt1_modify = NULL;
$opt2_modify = NULL;

if (isset($_POST['modify_name'])){
    $opt1_modify = $_POST['modify_name'];
    $opt1_modify_id = $_POST['id'];
}

if (isset($_POST['modify_email'])){
    $opt2_modify = $_POST['modify_email'];
    $opt2_modify_id = $_POST['id'];
}    

if($opt1_modify != NULL){
    $pdo->exec("UPDATE `users` SET `name` = '$opt1_modify' WHERE `users`.`id` = '$opt1_modify_id';");
}

if($opt2_modify != NULL){
    $pdo->exec("UPDATE `users` SET `email` = '$opt2_modify' WHERE `users`.`id` = '$opt2_modify_id';");
}
//----------------------------------------------------------------------------------------------------

//Suppression d'une entrée-----------------------------------------------
if (isset($_POST['delete_id'])){
    $delete_id = $_POST['delete_id'];
    $pdo->exec("DELETE FROM `users` WHERE `users`.`id` = '$delete_id';");
}
//-----------------------------------------------------------------------

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

    <label for="modify_name">Nom :</label>
    <input type="text" name="modify_name" id="modify_name" />

    <label for="modify_email">Email :</label>
    <input type="text" name="modify_email" id="modify_email" />

    <input type="submit" value="Modifier" />

</form><form id="delete" action="users.php" method="POST">

<input type="hidden" name="delete_id" value="'.$data['id'].'">
<input type="submit" value="Supprimer" />

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