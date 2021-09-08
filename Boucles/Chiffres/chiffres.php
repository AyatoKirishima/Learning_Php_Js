<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Chiffres</title>
</head>

<body>
    <?php
    $chiffre = 0;

    echo("Avec while :");

    while ($chiffre <= 9) {
        echo("<ul>
        <li>
        $chiffre
        </li>
        </ul>");
        $chiffre++;
    }

    echo("Avec for :");

    for ($nb=0; $nb < 10; $nb++) { 
        echo("<ul>
        <li>
        $nb
        </li>
        </ul>");
    }
    ?>
</body>

</html>