<?php
$servername = "localhost";
$username = "nom_utilisateur";
$password = "mot_de_passe";
$database = "nom_de_la_base_de_donnees";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

$sql = "SELECT valeur FROM valeurs WHERE id = 1"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Afficher la valeur dans le div
    $row = $result->fetch_assoc();
    echo "<div id='conteur'>" . $row["valeur"] . "</div>";
} else {
    echo "Aucun résultat trouvé dans la base de données.";
}

$conn->close();
?>
