<?php 
include_once 'mananger.php';
include_once 'produit.php';


$mananger = new Manager();

$produit = $mananger->read($_POST["id"]);

$produit->setNom($_POST["nom"]);
$produit->setPrix($_POST["prix"]);
$produit->setQuantite($_POST["quantite"]);





$saveIsOk = $mananger->save($produit);

if ($saveIsOk) {
	
	$message = 'Le produit a été mis à jour';
}else{

	$message = 'Echec de mise à jour';
}

 ?>

 <!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="utf_8">
	<title>SOMMAIRE</title>
</head>
<body>
   <H1>Resultat de la mise à jour du produit</H1>
   
   <?= $message ?>
</body>
</html>
