<?php 


require_once 'connexion.php';

$idE = isset($_GET['id'])?$_GET['id']:0;

$delete = "DELETE FROM employer WHERE idemp = ?";

$params = array($id);

$resultat = $pdo->prepare($delete);

$resultat->execute($params);






 

header("location:employe.php");



 ?>