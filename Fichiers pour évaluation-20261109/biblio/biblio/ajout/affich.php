<?php
include '../conf_server.php'; //"localhost", "root", "", "biblio"

$titre = $_POST['titre'];
$auteur = $_POST['auteur'];
$genre = $_POST['genre'];
$proprio = $_POST['proprio'];


// Creer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier connexion
if ($conn->connect_error) {
    die("La connexion a échouée : " . $conn->connect_error);
}

// Supprimer les probèmes d'encodage UTF8
$conn->query("SET NAMES UTF8");

$sql = "INSERT INTO livres (titre, auteur, genre, proprio) VALUES ('$titre', '$auteur', '$genre', '$proprio')";
if ($conn->query($sql) === TRUE) {
    echo "Nouveau enregistrement réussi";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}
$conn->close();
