<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle</title>

    <?php function triangle()
    {
        echo ("Triangle ! <br /><br />");

        //echo("*");
        $ligne_max = 25;

        for ($nb_lignes = 0; $nb_lignes < $ligne_max; $nb_lignes++) {
            for ($x = 0; $x < ($ligne_max - $nb_lignes); $x++) {
                echo ("&nbsp");
            }
            for ($i = 0; $i < $nb_lignes; $i++) {
                echo ("*"); // Espaces : "&nbsp"
            }
            //echo("*");
            echo ("<br />");
        }
    }
    ?>
</head>

<body>
    <?php
        triangle();
    ?>
</body>

</html>