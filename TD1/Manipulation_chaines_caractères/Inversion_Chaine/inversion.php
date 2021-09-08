<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inversion</title>
</head>

<body>
    <?php
    $chaine = "This is a really random text I have to reverse, is it working, yes, FINALLY";
    echo($chaine."<br>");
    echo strrev($chaine); // Affiche la chaine inversée
    ?>
</body>

</html>