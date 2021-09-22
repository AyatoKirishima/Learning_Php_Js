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
        session_start();
        $login = "admin";
        $password = "admin";
        //$valeur1=$_POST['Valeur1'];

        if ((array_key_exists('login',$_POST)) && ($_POST['login'] == $login) && 
        (array_key_exists('password',$_POST)) && ($_POST['password'] == $password)) {
            $_SESSION['connect'] = true;
            header('Location :'.$_SESSION['provenance']);
        }

    ?>

    <form method="post" action="">
        <p>
            <label for="id">Votre Identifiant :</label>
            <br>
            <input type="text" required name="id" id="id" placeholder="Entrez votre identifiant ici" size="30" />
            <br><br>
            <label for="password">Votre Mot de Passe :</label>
            <br>
            <input type="password" required name="password" id="password" placeholder="Entrez votre mot de passe ici" size="30" />
        </p>
        <input type="submit" value="Validez" name="validez">
    </form>
</body>

</html>