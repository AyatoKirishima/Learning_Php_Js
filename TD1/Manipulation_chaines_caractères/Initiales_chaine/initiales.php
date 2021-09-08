<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Initiales</title>

    <?php
    function initiales($text)
    {
        $text_initiale = ''; // déclare le recipient
        $n_mot = explode(" ", $text);
        foreach ($n_mot as $letters) {
            $text_initiale .= $letters{0} . '.';
        }
        return strtoupper($text_initiale);
    }
    ?>
</head>

<body>
    <?php
    echo initiales('This random text doesn\'t work');
    ?>
</body>

</html>