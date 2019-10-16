<?php 

include_once 'mananger.php';
include_once 'membre.php';


$mananger = new mananger();

$membre = $mananger->read($_GET['id']);

 $deleteIsOk = $mananger->delete($membre);

 if ($deleteIsOk)
 {
 	$message = 'Le membre a été supprimé';
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