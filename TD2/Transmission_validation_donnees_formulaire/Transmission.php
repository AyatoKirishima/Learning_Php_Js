<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transmission Données</title>
</head>

<body>
    <form action="">
        <fieldset>

            <!-- Prénom -->
            <label for="Prénom">Prénom :</label>
            <input type="text" name="Prénom" placeholder=" Prénom" />

            <!-- Nom -->
            <label for="Nom">Nom :</label>
            <input type="text" name="Nom" placeholder=" Nom " />

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

            <input type="radio" name="bac" value="1" id="1"> 
            <label for="Etudes" >BAC +1</label>
            <br>
            <input type="radio" name="bac" value="2" id="2"> 
            <label for="Etudes" >BAC +2</label>
            <br>
            <input type="radio" name="bac" value="3" id="3"> 
            <label for="Etudes" >BAC +3</label>

        </fieldset>

        <br>

        <fieldset>
            <legend>Choisissez vos/votre language/s de Programmation</legend>

            <!-- Programmation -->
            <label for="Prog">Programmation :</label>
            <br>

            <!-- C -->
            <input type="checkbox" name="c" id="c">
            <label for="c">C</label>
            <br>

            <!-- Java -->
            <input type="checkbox" name="java" id="java">
            <label for="java">Java</label>
            <br>

            <!-- Php -->
            <input type="checkbox" name="php" id="php">
            <label for="php">Php</label>
            <br>

        </fieldset>

        <br>

        <fieldset>
            <!-- Commentaire -->
            <label for="commentaire">Commentaires :</label>
            <br>
            <textarea name="" id="" cols="100" rows="10"></textarea>
        </fieldset>

        <br>

        <input type="submit" value="Valider">
    </form>
</body>

</html>