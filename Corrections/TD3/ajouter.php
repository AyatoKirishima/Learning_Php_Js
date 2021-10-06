<?php
include 'caddie.class.php';
$articles = unserialize(file_get_contents('data/articles'));
if (isset($_GET['ref']))
{
	$unarticle = $articles[$_GET['ref']];
}
else
{
	header("location:commander.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Achat effectué</title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
session_start(); 
if(isset($_SESSION['caddie']) && !empty($_SESSION['caddie']))
	$caddie = $_SESSION['caddie'];
else
	$caddie = new Caddie ();
	
if(!empty($_POST)) {
	$ok=true;
	$_POST['quantite']=trim(htmlentities($_POST['quantite']));
	if(empty($_POST['quantite'])) {
		echo 'Vous devez renseigner la quantité.<br />';
		$ok=false;
	} elseif(!is_numeric($_POST['quantite'])) {
		echo 'La quantité renseignée n\'est pas correcte.<br />';
		$ok=false;
	} else {
		$caddie->ajouterArticle( $unarticle, $_POST['quantite']);
		$_SESSION['caddie']=$caddie;
	}
}

 if ($ok)
 {
 // balises dl, dt, dd : balises de listes de définition
?>

<h1>L'article suivant a été ajouté à votre panier</h1>

<dl>
  <dt>Référence :</dt>
  <dd><?php echo $_GET['ref'] ?></dd>
  <dt>Designation :</dt>
  <dd><?php echo $unarticle->getDesignation() ?></dd>
  <dt>Prix unitaire :</dt>
  <dd><?php echo $unarticle->getPrix() ?></dd>
  <dt>Quantite :</dt>
  <dd><?php echo $_POST['quantite'] ?></dd>
</dl>

<?php
}
?>

<a href="commander.php">Retourner à la liste des articles</a>
</body>
</html>