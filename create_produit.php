<?php 

include_once 'mananger.php';
include_once 'produit.php';


$produit = new Produit();

  $produit->setNom($_POST["nom"]);
  $produit->setPrix($_POST["prix"]);
  $produit->setQuantite($_POST["quantite"]);
 
   

     $mananger = new Manager();

    $saveIsOk =  $mananger->save($produit);

   if ($saveIsOk) {
   	
   	  header("location:readAll_produit.php");
   }else{

   	     $message = "Echec de l'insertion";
   }

 ?>

 <!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="UTF_8">
	<title>ajouter un membre</title>
</head>
<body>
   <H1>Ajout d'un Membre</H1>
   <?= $message; ?>
</body>
</html>