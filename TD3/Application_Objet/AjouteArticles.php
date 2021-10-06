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
        // Création de deux articles
        $a1 = new Article("Article 1", 1, 8);
        $a2 = new Article("Article 2", 2, 5);
        // Insertion des 2 articles dans l'array
        $arrayArticles = array(1 => $a1, 2 => $a2);

        // Sérialisation / Récupération de données
        $s = serialize($arrayArticles);

        file_put_contents('store.txt', $s);
        $s = file_get_contents('store.txt');

        $arrayNewArticles = unserialize($s);

        // Affichage des articles dans la table
        foreach ($arrayNewArticles as $article) {
            $article->Afficher();
        }
        ?>
    </table>

    <br>
    <!-- Zone d'Ajout d'un article -->
    <label for="Designation">Designation : </label>
    <input type="text" required name="Designation">
    <label for="Prix">Prix Unitaire : </label>
    <input type="text" required name="Prix">
    <input type="submit" name="Ajouter" value="Ajouter">
</body>

</html>