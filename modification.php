<?php 
include_once 'mananger.php';
include_once 'membre.php';


$mananger = new mananger();

$membre = $mananger->read($_POST['id']);

$membre->setNom($_POST['nom']);
$membre->setPrenom($_POST['prenom']);
$membre->setTel($_POST['tel']);
$membre->setCarte($_POST['carte']);




$saveIsOk = $mananger->save($membre);

if ($saveIsOk) {
	
	$message = 'Le membre a été mis à jour';
}else{

	$message = 'Echec de mise à jour';
}

 ?>

 <!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="UTF_8">
	<title>SOMMAIRE</title>
</head>
<body>
   <H1>Resultat de la mise à jour du membre</H1>
   
   <?= $message ?>
</body>
</html>
