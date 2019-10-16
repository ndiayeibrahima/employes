<?php 

$pdo = new PDO("mysql:host=localhost;dbname=produit","root","");
$mot = 0;
$quantite = $_POST["quantite"];

if (isset($_POST["submit"])) {
 

$requete = "SELECT * FROM produit WHERE quantite = '$quantite' ";

$resultat = $pdo->query($requete);


}







 ?>

 <!DOCTYPE html>
<html lang='en'>
<head>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    var txt = "";
    txt += "Width of div: " + $("#div1").width() + "</br>";
    txt += "Height of div: " + $("#div1").height();
    $("#div1").html(txt);
  });
});
</script>
<style>
#div1 {
  height: 100px;
  width: 900px;
  padding: 10px;
  margin: 3px;
  border: 1px solid blue;
  background-color: lightblue;
}
</style>


  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <meta charset="UTF_8">
  <title>liste produits</title>
</head>
<body>

  <center><?php require_once 'menu.php'; ?></center> 
  <div class="container" style="margin-top:70px;">
    <div class="panel-primary">
      <div class="panel-heading"><center><H4>Resultat de la recherche</H4></center></div>
      <div class="panel-body">
        
        
    </div>

    <div class="panel-primary">
      
      <div class="panel-body">
         
      
<table class="table table-striped table-bordered">

          <thead>
            <tr>
            <th>Nom</th><th>Prix</th><th>quantite</th><th>montant</th>
            <th>Modifier</th><th>Supprimer</th>
            </tr>
          </thead>
          <tbody>
           
    <?php while($produit = $resultat->fetch()){?>
    
           
            <tr>
             <?php if ($produit["quantite"]< 10) {     ?>
                
                <td style="color:red;"><?=$produit["nom"]?></td>
              <?php } else {?>
              <td> <?= $produit["nom"] ?></td>
            <?php } ?>
               <td><?= $produit["prix"] ?> </td>
               
               <td><?=$produit["quantite"] ?></td>
               <?php $mot = $produit["prix"]*$produit["quantite"];  ?>
               <td><?= $mot ?></td>
 
       <td><a href="form_mod_prod.php?id=<?= $produit["id"]  ?>">
        <img src="mod.png" style="width:10%; text-align: center;">
        </a></td>
    <td><a href="deleteProduit.php?id=<?= $produit["id"] ?>"> 
        <img src="sup.png" style="width:8%"></span></a></td>
      
            </tr>
  <center>
  	<tr>
            	<td rowspan="2">
       <div id="div1"></div>
<br>

<button>voir les caresteristiques</button>


</td>
   </tr>
   </center>
        <?php } ?>
      

          </tbody>
</table>
      
    </div>
  </div> 

</body>
</html>



