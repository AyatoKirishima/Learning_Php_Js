<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trim</title>
</head>

<body>
    <?php 
    $chaine = "  Je n'ai aucune idée de ce que je suis en train de faire     ";
    trim("$chaine");
    echo("$chaine");
    ?>
</body>

</html>