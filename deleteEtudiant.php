<?php 


require_once 'connect.php';

$idE = isset($_GET['idE'])?$_GET['idE']:0;

$delete = "DELETE FROM etudiant WHERE idEtu = ?";

$params = array($idE);

$resultat = $pdo->prepare($delete);

$resultat->execute($params);






 

header("location:etudiant.php");



 ?>