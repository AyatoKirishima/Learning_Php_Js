<html>
<head>
<meta charset="utf-8">
<title>Articles</title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
include 'article.class.php';

$articles = unserialize(file_get_contents('data/articles'));

if(!empty($_POST)) {
	$ok=true;
	$_POST['designation']=trim(htmlentities($_POST['designation']));
	$_POST['prix']=trim(htmlentities($_POST['prix']));
	if(empty($_POST['designation'])) {
		echo 'Vous devez renseigner la désignation produit.<br />';
		$ok=false;
	}
	if(empty($_POST['prix'])) {
		echo 'Vous devez renseigner le prix.<br />';
		$ok=false;
	}
	elseif(!is_numeric($_POST['prix'])) {
		echo 'Le prix renseigné n\'est pas correcte.<br />';
		$ok=false;
	}
	
	if($ok) {
		$key=max(array_keys($articles))+1;
	   $articles[$key]=new Article($_POST['designation'],$_POST['prix'],$key);
		file_put_contents('data/articles', serialize($articles));
	}
} 
?>
<h1>Les articles en vente</h1>
<table>
<tr>
  <th>Référence</th>
  <th>Désignation</th>
  <th>Prix Unitaire</th>
</tr>
<?php
foreach($articles as $article) {
	echo '<tr>';
	$article->afficher();
	echo '</tr>';
}
?>
</table>
<form name="add" action="" method="post">
<label for="designation">Désignation</label>
<input id="designation" name="designation" type="text" />
<label for="prix">Prix unitaire</label>
<input id="prix" name="prix" type="text" /><!-- Pas de type nummber car lorsqu'on entre pas un nombre, la valeur n'est pas envoyée. On a donc le mauvais message d'erreur -->
<input type="submit" value="Ajouter" />
</form>
</body>
</html>