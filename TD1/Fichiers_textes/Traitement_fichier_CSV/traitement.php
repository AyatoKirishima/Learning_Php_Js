<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treatment</title>
</head>

<body>
    <?php
    /*$document = fgetcsv("document.csv", "r");
    $separator = ",| ";

    for ($c = 0; $c < $num; $c++) {
        echo $data[$c] . "<br />\n";
    }*/

    $row = 1;
    if (($document = fopen("document.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($document, 1000, ",")) !== FALSE) {
            $num = count($data); // On compte le nombre de champs
            echo "<p> $num champs à la ligne $row: <br /></p>\n"; // Phrase d'affichage
            $row++; //On incrémente le nombre de rangs
            for ($c = 0; $c < $num; $c++) {
                echo $data[$c] . "<br />\n"; //On affiche 
            }
        }
        fclose($document); //On ferme le doc
    }

    echo("<br> Maintenant qu'on a ça on peut tout mettre en forme dans un tableau !<br>");

    $row = 1;
    if (($document = fopen("document.csv", "r")) !== FALSE) {
        echo("<table>");
        while (($data = fgetcsv($document, 1000, ",")) !== FALSE) {
            $num = count($data); // On compte le nombre de champs
            $row++; //On incrémente le nombre de rangs
            echo("<tr>");
            for ($c = 0; $c < $num; $c++) {
                
                echo ("<td>".$data[$c] . "</td>\n"); //On affiche 
                
            }
            echo("</tr>");
            
        }
        echo("</table>");
        fclose($document); //On ferme le doc
        
    }
    ?>
</body>

</html>