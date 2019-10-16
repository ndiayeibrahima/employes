<?php 

include_once 'mananger.php';
include_once 'produit.php';


$mananger = new Manager();

$produit = $mananger->read($_GET['id']);

 $deleteIsOk = $mananger->delete($produit);

 if ($deleteIsOk)
 {
 	header("location:readAll_produit.php");
 }
 else
 {
 	$message = 'Echec de suppression';
 }
 ?>

 <!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="UTF_8">
	<title>SOMMAIRE</title>
</head>
<body>
   <H1>Resultat de suppression du membre</H1>
   
   <?= $message ?>
</body>
</html>