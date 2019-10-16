<?php 
include_once 'manager.php';
include_once 'utilisateur.php';


$manager = new Manager();

$utilisateur = $manager->read($_POST["id"]);

$utilisateur->setNom($_POST["nom"]);
$utilisateur->setLogin($_POST["login"]);
$utilisateur->setMotdepasse($_POST["motdepasse"]);





$saveIsOk = $manager->save($utilisateur);

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
