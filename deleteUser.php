<?php 

include_once 'manager.php';
include_once 'utilisateur.php';


$mananger = new Manager();

$utilisateur = $mananger->read($_GET['id']);

 $deleteIsOk = $mananger->delete($utilisateur);

 if ($deleteIsOk)
 {
 	header("location:readAll_user.php");
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