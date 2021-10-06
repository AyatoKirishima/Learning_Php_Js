<?php session_start(); ?>

<html>
<head>
<meta charset="utf-8">
<title>Ajouter au panier</title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
// set_include_path('/home/../toto3u/www/caddie/');
include 'article.class.php';

$articles = unserialize(file_get_contents('data/articles'));
?>
<h1>Ajouter au panier</h1>
<table>
<tr>
  <th>Référence</th>
  <th>Désignation</th>
  <th>Prix Unitaire</th>
  <th>Acheter</th>
</tr>
<?php
foreach($articles as $article) {
 echo '<tr>';
 $article->afficher();  
 echo '<td><a href="achat.php?ref='.$article->getReference().'">Acheter</a></td>';
 echo '</tr>';
}
?>
</table>
<a href="voirCaddie.php">Voir votre panier</a>
</body>
</html>