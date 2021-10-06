<?php
// set_include_path('/home/WWW/gga_etudiants/dossier_etudiant/www/caddie/');
include 'caddie.class.php';

session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Votre pannier</title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
if(isset($_SESSION['caddie']) && !empty($_SESSION['caddie']))
	$caddie = $_SESSION['caddie'];
else
	$caddie = new Caddie ();
?>
<h1>Voici vos articles commandés</h1>
<table>
<tr>
  <th>Référence</th>
  <th>Désignation</th>
  <th>Prix Unitaire</th>
  <th>Quantité</th>
  <th>Prix Total</th>
</tr>
<?php
$caddie->afficher();
?>
</table>
<?php
$caddie->afficherTotal();
?>
<a href="commander.php">Retourner à la liste des articles</a>
</body>
</html>