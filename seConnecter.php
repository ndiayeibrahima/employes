<?php 


$pdo = new PDO("mysql:host=localhost;dbname=produit","root","");

$loginn = $_POST["login"];
$motdepasses = $_POST["motdepasse"];

$requete = "SELECT * FROM utilisateur  ";

$resultat = $pdo->query($requete);

$user = $resultat->fetch();

$id = $user["id"];
$login = $user["login"];
$motdepasse = $user["motdepasse"];

if ($login == $loginn AND $motdepasse == $motdepasses) {

	header("location:acceuil.php");
}
else
{

	echo  " <center><font color='red'><h4>login ou mot de passe incorrect</h4></font></center>";
}










 ?>
 <center><a href="login.php">Resseyer</a></center>
