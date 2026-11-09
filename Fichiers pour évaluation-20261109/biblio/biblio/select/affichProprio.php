<?php
include '../conf_server.php'; //"localhost", "root", "", "biblio"

$proprio = $_POST['proprio'];


// Creer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier connexion
if ($conn->connect_error) {
    die("La connexion a échouée : " . $conn->connect_error);
}

// Supprimer les probèmes d'encodage UTF8
$conn->query("SET NAMES UTF8");

$sql = "SELECT titre, auteur, genre FROM livres WHERE proprio='$proprio'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Pour chaque ligne 
    while ($row = $result->fetch_assoc()) {

        echo $row["titre"] . ' écrit par ' . $row["auteur"] . ' appartient à ' . $proprio;
        echo '<br>';
    }
} else {
    echo "Propriétaire inconnu!!";
}
$conn->close();
