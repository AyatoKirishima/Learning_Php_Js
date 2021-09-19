<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>

<body>
    <form action="" method="POST">
        <h1>
            Calculatrice
        </h1>

        <!-- Valeur1 -->
        <label for="Valeur1">Valeur 1 :</label>
        <input type="number" required name="Valeur1" placeholder=" 1e Valeur " />
        <?php $valeur1=$_POST['Valeur1'];?>

        <br>

        <!-- Valeur2 -->
        <label for="Valeur2">Valeur 2 :</label>
        <input type="number" required name="Valeur2" placeholder=" 2e Valeur " />
        <?php $valeur2=$_POST['Valeur2'];?>

        <br>

        <!-- Submission d'opérations -->
        <p>Faites l'opération de votre choix : </p>

        <input type="submit" value="Addition" name="Addition">
        <br><br>
        <input type="submit" value="Multiplication" name="Multiplication">
        <br><br>
        <input type="submit" value="Soustraction" name="Soustraction">
        <br><br>
        <input type="submit" value="Division" name="Division">

        <?php
        $res = 0;

        if(isset($_POST['Addition']) AND $_POST['Addition']=='Addition') {
            $res = $valeur1 + $valeur2;
        }
        elseif (isset($_POST['Multiplication']) AND $_POST['Multiplication']=='Multiplication') {
            $res = $valeur1 * $valeur2;
        }
        elseif (isset($_POST['Soustraction']) AND $_POST['Soustraction']=='Soustraction') {
            $res = $valeur1 - $valeur2;
        }
        elseif (isset($_POST['Division']) AND $_POST['Division']=='Division') {
            if ($valeur2 == 0) {
                $res = 0;
                echo("<br><br>Erreur division par 0 :)");
            } else {
                $res = $valeur1 / $valeur2;
            }
        }
        echo ("<br><br>Résultat du calcul :\n");
        if ($res == 0) {
            echo ("Erreur");
        } else {
            echo $res;
        }
        ?>
    </form>
</body>

</html>