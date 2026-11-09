<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblio</title>
</head>

<body>
    <h1>Bibliothèque</h1>

    <a href="ajout/ajout.php">Ajouter un livre</a>
    <br>
    <br>
    <a href="select/ajoutProprio.php">Visualier les livres d'un propiétaire</a>
    <br><br>
    <?php

    include 'conf_server.php'; //"localhost", "root", "", "biblio"

    // Creer une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier connexion
    if ($conn->connect_error) {
        die("La connexion a échouée : " . $conn->connect_error);
    }

    // Supprimer les probèmes d'encodage UTF8
    $conn->query("SET NAMES UTF8");



    $sql = "SELECT titre, auteur FROM livres";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Pour chaque ligne 
        while ($row = $result->fetch_assoc()) {

            echo $row["titre"] . ' écrit par ' . $row["auteur"];
            echo '<br>';
        }
    } else {
        echo "Bibliothèque vide";
    }

    $conn->close();





    ?>
</body>

</html>