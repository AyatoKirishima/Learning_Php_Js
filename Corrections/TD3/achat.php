<?php session_start(); ?>
<html>
<head>
<meta charset="utf-8">
<title>Acheter</title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
include 'article.class.php';
$articles = unserialize(file_get_contents('data/articles'));
if (isset($_GET['ref']))
{	$unarticle = $articles[$_GET['ref']];	}
else
{	header("location:commander.php");		}
?>
<h1>Acheter l'article suivant</h1>
<dl>
  <dt>Référence :</dt>
  <dd><?php echo $_GET['ref'] ?></dd>
  <dt>Designation :</dt>
  <dd><?php echo $unarticle->getDesignation() ?></dd>
  <dt>Prix unitaire :</dt>
  <dd><?php echo $unarticle->getPrix() ?></dd>
</dl>
<form name="achat" action="ajouter.php<?php echo '?ref='.$_GET['ref'] ?>" 
	  method="post">
  <label for="quantite">Quantité</label>
  <input id="quantite" name="quantite" type="text" />
  <input type="submit" value="Ajouter au panier" /> 
</form>
<a href="commander.php">Annuler l'achat et retourner à la liste des articles</a>
</body>
</html>