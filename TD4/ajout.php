<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajouter</title>
</head>

<body>
    <!-- Ajouter un site à la table Sites -->

    <?php
    include_once "connexion.php";
    include_once "afficher.php";

    //session_start();
    //$_SESSION["nom"] = $nom;

    if (array_key_exists('nom', $_POST) && array_key_exists('ville', $_POST) && array_key_exists('latitude', $_POST) && array_key_exists('longitude', $_POST)) {
        $nom = $_POST['nom'];
        $ville = $_POST['ville'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];

        // Préparation insertion
        $insert_stmt = $objPdo->prepare("INSERT INTO Sites (Nom,Ville,Latitude,Longitude) VALUES( ? , ? , ? , ? )");

        $insert_stmt->bindValue(1, $nom, PDO::PARAM_STR);
        $insert_stmt->bindValue(2, $ville, PDO::PARAM_STR);
        $insert_stmt->bindValue(3, $latitude, PDO::PARAM_STR);
        $insert_stmt->bindValue(4, $longitude, PDO::PARAM_STR);
        $insert_stmt->execute();
        // Redirection après ajout
        header('Location:sites.php');
    }
    ?>
    <br>
    <form action="" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" required name="nom">
        <br><br>
        <label for="ville">Ville :</label>
        <input type="text" required name="ville">
        <br><br>
        <label for="latitude">Latitude :</label>
        <input type="number" min="-180" max="180" required name="latitude">
        <br><br>
        <label for="longitude">Longitude :</label>
        <input type="number" min="-180" max="180" required name="longitude">
        <br><br>
        <input type="submit" value="Ajouter" name="Ajouter">
    </form>

    <br>
    
    <a href="sites.php">
        <input type="button" value="Retour" name="Retour">
    </a>
</body>

</html>