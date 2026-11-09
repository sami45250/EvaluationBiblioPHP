<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ajout</title>
</head>

<body>
    <h1>Ajouter un livre</h1>
    <br><br>
    <a href="../index.php">Acceuil</a>
    <br><br>
    <form action="affich.php" method="post">

        <label for="titre">Titre : </label>
        <input type="text" name="titre" id="titre">
        <br><br>
        <label for="auteur">Auteur : </label>
        <input type="text" name="auteur" id="auteur">
        <br><br>
        <label for="genre">Genre : </label>
        <input type="text" name="genre" id="genre">
        <br><br>
        <label for="proprio">Propriétaire : </label>
        <input type="text" name="proprio" id="proprio">
        <br><br>

        <input type="submit" value="Envoyer">

    </form>
</body>

</html>