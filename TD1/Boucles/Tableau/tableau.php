<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo("<table>");
    for ($x=0; $x < 10; $x++) { 
        echo("<tr>");
    
        for ($i=0; $i < 10; $i++) { 
            $nb = 1+$x*10+$i;
            echo("<td> $nb </td>");
        }
        echo("</tr>");
    }
    echo("</table>");
    ?>
</body>

</html>