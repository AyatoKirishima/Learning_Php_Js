<!-- Afficher les données de la table sites dans une table HTML -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sites</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
        include_once 'connexion.php';

        // Suppression
        function delete() {
            include_once 'connexion.php';
            $delete_stmt = $objPdo->query("DELETE FROM Sites WHERE idSite = " . $row["idSite"]);
        }
        
        $result = $objPdo->query('select * from Sites');
        while ($row=$result->fetch( ) )
        {
           // echo $row ['idSite'] . " - " . $row ['Nom'] . " - " . $row ['Ville'] . " - " . $row ['Latitude'] . " - " . $row ['Longitude'] . "<br />";

                echo('<table>
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

                        <td>
                            Actions
                        </td>

                    </tr>
                </thead>');

                foreach ($result as $row)
                {
                    echo('<tr>');
                    echo ('<td>'.$row["idSite"].'</td>');
                    echo ('<td>'.$row["Nom"].'</td>');
                    echo ('<td>'.$row["Ville"].'</td>');
                    echo ('<td>'.$row["Latitude"].'</td>');
                    echo ('<td>'.$row["Longitude"].'</td>');
                    echo('<td><input type="submit" value="Supprimer" name="Supprimer" onclick="delete()"><input type="submit" value="Modifier" name="Modifier"><input type="submit" value="Ventes" name="Ventes"></td>');
                    echo('</tr>');
                }

            echo("</table>");
            echo('<a href="ajout.php"> <input type="submit" value="Ajouter" name="Ajouter"> </a>');
        }
    ?>

</body>

</html>