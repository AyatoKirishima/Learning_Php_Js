<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th colspan="3">Articles</th>
            </tr>
        </thead>
        <tr>
            <th>Référence</th>
            <th>Désignation</th>
            <th>Prix Unitaire</th>
        </tr>

        <?php include_once "article.php";
        // Définition de variables
        $error = false;


        // Création de deux articles
        //$a1 = new Article("Article 1", 1, 8);
        //$a2 = new Article("Article 2", 2, 5);
        // Insertion des 2 articles dans l'array
        //$arrayArticles = array(1 => $a1, 2 => $a2);

        // Sérialisation / Récupération de données
        //$s = serialize($arrayArticles);
        //file_put_contents('store.txt', $s);
        $s = file_get_contents('store.txt');
        $arrayNewArticles = unserialize($s);
        /*echo("<pre>");
        var_dump($arrayNewArticles);
        echo("</pre>");*/

        // Auto incrémentation + Vérification si l'array est non vide
        if (array_key_exists('designation', $_POST) && !$error) {
            // Définition des variables
            $designation=$_POST['designation'];
            $prix=$_POST['prix'];

            // La valeur de la clef = la valeur maximale trouvée (dans l'array) + 1
            $valueKey = max(array_keys($arrayNewArticles)) +1;

            // Création d'un nouvel article
            if(isset($_POST['Ajouter'])) {
                $nouvelArticle = new Article($valueKey, $designation, $prix);
            }
            // Ajout du nouvel article à l'array
            array_push($arrayNewArticles, $nouvelArticle);
            //$nouvelArticle->afficher();

            $s = serialize($arrayNewArticles);
            file_put_contents('store.txt', $s);
        }
        // Affichage des articles dans la table
        foreach ($arrayNewArticles as $article) {
            $article->afficher();
        }
        echo(sizeof($arrayNewArticles));
        ?>
    </table>

    <br>
    <!-- Zone d'Ajout d'un article -->
    <form action="AjouteArticles.php" method="POST">
    <label for="designation">Designation : </label>
    <input type="text" required name="designation">
    <label for="prix">Prix Unitaire : </label>
    <input type="number" min="0" required name="prix">
    <input type="submit" name="Ajouter" value="Ajouter">
    </form>
</body>

</html>