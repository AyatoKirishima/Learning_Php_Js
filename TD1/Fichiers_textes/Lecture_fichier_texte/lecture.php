<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <?php
    function read() {
        $handle = fopen("text.txt", "x+"); //r = read, x = ecriture / lecture
    }
    ?>
</head>

<body>
    <?php
    $ressource = fopen('text.txt', 'rb');
    $fileLines = file("text.txt");
    $nb_lines = count($fileLines);

    for ($i=0; $i < $nb_lines; $i++) { 
        // Permet d'afficher une ligne, puis un saut de ligne "br"
        echo fgets($ressource). '<br>';
    }

    // On affiche le nombre de lignes du fichier texte
    echo("<br> Le nombre de lignes du fichier est de : ");
    echo $nb_lines;
    ?>
</body>

</html>