<?php 

include_once 'manager.php';
include_once 'utilisateur.php';


$utilisateur = new Utilisateur();

  $utilisateur->setNom($_POST["nom"]);
  $utilisateur->setLogin($_POST["login"]);
  $utilisateur->setMotdepasse($_POST["motdepasse"]);
 
   

     $mananger = new Manager();

    $saveIsOk =  $mananger->save($utilisateur);

   if ($saveIsOk) {
   	
   	 header("location:readAll_user.php");
   }else{

   	     $message = "Echec de l'insertion";
   }

 ?>

 <!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="utf-8">
	<title>ajouter un User</title>
</head>
<body>
   <H1>Ajout d'un user</H1>
   <?= $message; ?>
</body>
</html>