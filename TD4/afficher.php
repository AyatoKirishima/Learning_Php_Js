<?php
    include_once "connexion.php";
    //include_once "sites.php";

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

    include_once 'connexion.php';

    $result = $objPdo->query('select * from Sites');
    while ($row = $result->fetch()) {
        // echo $row ['idSite'] . " - " . $row ['Nom'] . " - " . $row ['Ville'] . " - " . $row ['Latitude'] . " - " . $row ['Longitude'] . "<br />";

        echo ('<table>
                <thead>
                    <tr>
                        <td>
                            Id
                        </td>

                        <td>
                            Nom
                        </td>

                        <td>
                            Ville
                        </td>

                        <td>
                            Latitude
                        </td>

                        <td>
                            Longitude
                        </td>
                    </tr>
                </thead>');

        foreach ($result as $row) {
            echo ('<tr>');
            echo ('<td>' . $row["idSite"] . '</td>');
            echo ('<td>' . $row["Nom"] . '</td>');
            echo ('<td>' . $row["Ville"] . '</td>');
            echo ('<td>' . $row["Latitude"] . '</td>');
            echo ('<td>' . $row["Longitude"] . '</td>');
            //echo('<td><input type="submit" value="Supprimer" name="Supprimer"></td>');
            //echo('<td><input type="submit" value="Modifier" name="Modifier"></td>');
            //echo('<td><input type="submit" value="Voir" name="Ventes"></td>');
            echo ('</tr>');
        }

        echo ("</table>");
        //echo('<a href="ajout.php"> <input type="submit" value="Ajouter" name="Ajouter"> </a>');
    }
    ?>