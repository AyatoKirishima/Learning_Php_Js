<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Ajouter un site à la table Sites -->

    <?php
    include_once "connexion.php";
    include_once "sites.php";

    // Préparation insertion
    /*$insert_stmt = $objPdo->prepare("INSERT INTO TestPrep (id,ligne) VALUES( ? , ? ) ");

        $insert_stmt->bindValue(1, $row["idSite"], PDO::PARAM_STR);
        $insert_stmt->bindValue(2, $maligne, PDO::PARAM_STR);
        $insert_stmt->execute();*/ 

        if (array_key_exists('nom',$_POST) && array_key_exists('ville',$_POST) && array_key_exists('latitude',$_POST) && array_key_exists('longitude',$_POST)) {
            $nom=$_POST['nom'];        
            $ville=$_POST['ville'];
            $latitude=$_POST['latitude'];
            $longitude=$_POST['longitude'];
        }
        

    
    ?>
    <br>
    <label for="nom">Nom :</label>
    <input type="text" required name="nom">
    <br>
    <label for="ville">Ville :</label>
    <input type="text" required name="ville">
    <br>
    <label for="latitude">Latitude :</label>
    <input type="number" required name="latitude">
    <br>
    <label for="longitude">Longitude :</label>
    <input type="number" required name="longitude">
    <br><br>
    <input type="submit" value="Ajouter" name="Ajouter">

</body>

</html>