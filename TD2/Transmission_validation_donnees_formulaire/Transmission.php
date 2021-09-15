<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transmission Données</title>
</head>

<body>
    <style>
        [required] {
            border: 2px solid rgba(255, 192, 203, 0.5);
        }
    </style>

    <form action="Recap.php" method="POST">
        <!-- GET = informations dans l'URL <> POST = plus sécurisé -->
        <fieldset>

            <!-- Prénom -->
            <label for="Prénom">Prénom :</label>
            <input type="text" required name="Prénom" placeholder=" Prénom " />

            <!-- Nom -->
            <label for="Nom">Nom :</label>
            <input type="text" required name="Nom" placeholder=" Nom " />

        </fieldset>

        <fieldset>

            <!-- Date Naissance-->
            <label for="">Date de Naissance :</label>

            <!-- Option rapide efficace -->
            <input type="month" />


            <!-- Date Naissance-->
            <label for="">Date de Naissance avec "select" :</label>

            <!-- Option ... autre ? -->
            <select name="month" id="month_select">
                <option value="janvier">Janvier</option>
                <option value="fevrier">Fevrier</option>
                <option value="mars">Mars</option>
                <option value="avril">Avril</option>
                <option value="mai">Mai</option>
                <option value="juin">Juin</option>
                <option value="juillet">Juillet</option>
                <option value="aout">Aout</option>
                <option value="septembre">Septembre</option>
                <option value="octobre">Octobre</option>
                <option value="novembre">Novembre</option>
                <option value="decembre">Decembre</option>
            </select>

            <select name="year" id="year_select">
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
            </select>

        </fieldset>

        <br>

        <fieldset>
            <legend>Choisissez votre niveau d'études</legend>

            <!-- Etudes -->
            <label for="Etudes">Etudes :</label>
            <br>

            <input type="radio" required name="bac" value="BAC +1" id="BAC +1">
            <label for="BAC +1">BAC +1</label>
            <br>
            <input type="radio" required name="bac" value="BAC +2" id="BAC +2">
            <label for="BAC +2">BAC +2</label>
            <br>
            <input type="radio" required name="bac" value="BAC +3" id="BAC +3">
            <label for="BAC +3">BAC +3</label>


        </fieldset>

        <br>

        <fieldset>
            <legend>Choisissez vos/votre language/s de Programmation</legend>

            <!-- Programmation -->
            <label for="Prog">Programmation :</label>
            <br>

            <!-- C -->
            <input type="checkbox" value="C" name="language[]" id="c">
            <label for="c">C</label>
            <br>

            <!-- Java -->
            <input type="checkbox" value="Java" name="language[]" id="java">
            <label for="java">Java</label>
            <br>

            <!-- Php -->
            <input type="checkbox" value="Php" name="language[]" id="php">
            <label for="php">Php</label>
            <br>

        </fieldset>

        <br>

        <fieldset>
            <!-- Commentaire -->
            <label for="commentaire">Commentaires :</label>
            <br>
            <textarea name="commentaire" required id="commentaire" cols="100" rows="10"></textarea>

        </fieldset>

        <br>

        <input type="submit" value="Valider">
    </form>
</body>

</html>