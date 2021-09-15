<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données</title>
</head>

<body>
    <h2>
        Page d'informations
    </h2>

    <?php
    //Nom
    echo ("Nom :\n");
    echo $_POST['Nom'];
    echo ("<br><br>");

    //Prénom
    echo ("Prénom :\n");
    echo $_POST['Prénom'];
    echo ("<br><br>");

    //Date Naissance
    echo ("Date de naissance :\n");
    echo $_POST['month'];
    echo (" ");
    echo $_POST['year'];
    echo ("<br><br>");

    //Niveau d'études
    echo ("Niveau d'études :\n");
    echo $_POST['bac'];
    echo ("<br><br>");

    //Language Programmation
    echo ("Languages de programmation :\n");
    //On affiche chaque élément du tableau
    if (array_key_exists('language', $_POST)) {
        $array = $_POST['language'];
        foreach ($array as $value)
            echo '<br />' . $value;
        echo ("<br><br>");
    } else {
        echo("Aucun <br><br>");
    }


    //Commentaire
    echo ("Votre commentaire :\n");
    echo $_POST['commentaire'];
    echo ("<br><br>");
    ?>
</body>

</html>