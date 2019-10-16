<?php 

$pdo = new PDO("mysql:host=localhost;dbname=produit","root","");
$mot = 0;
$nom = $_POST["nom"];

if (isset($_POST["submit"])) {

  if (!empty($_POST["nom"])) {
    
 
 

$requete = "SELECT * FROM utilisateur WHERE nom like '%$nom%' ";

$resultat = $pdo->query($requete);

 } 
 else
   {
    $msg = "<center><font color='red'><h3>Veuillez Entrer un nom</h3></font></center>";
   }

}







 ?>

 <!DOCTYPE html>
<html lang='en'>
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <meta charset="UTF_8">
  <title>liste produits</title>
</head>
<body>

  <center><?php require_once 'menu.php'; ?></center> 
  <div class="container" style="margin-top:70px;">
    <div class="panel-primary">
      <?php if (!empty($_POST["nom"])) {?>
       
      
      <div class="panel-heading"><center><H4>Resultat de la recherche</H4></center></div>

<?php } ?>
      <div class="panel-body">
        
        
    </div>

    <div class="panel-primary">
      
      <div class="panel-body">
         
      
<table class="table table-striped table-bordered">
<?php if (!empty($_POST["nom"])) {?>
          <thead>
            <tr>
            <th>Nom</th><th>login</th>
            <th>Modifier</th><th>Supprimer</th>
            </tr>
          </thead>
          <tbody>
           
             
           
    <?php while($user = $resultat->fetch()){?>
    
           
            <tr>
             
               <td><?= $user["nom"] ?> </td>
               <td><?= $user["login"] ?> </td>
               
               
       <td><a href="form_mod_user.php?id=<?= $user["id"]  ?>">
        <img src="mod.png" style="width:10%; text-align: center;">
        </a></td>
    <td><a href="deleteUser.php?id=<?= $user["id"] ?>"> 
        <img src="sup.png" style="width:8%"></span></a></td>
      
            </tr>
        <?php } ?>
    
          </tbody>
          <?php } ?>
</table>
      
    </div>
  </div> 
  <?php if(!empty($msg)){
    echo $msg;
  } ?>
</body>
</html>



