<?php 
include_once 'mananger.php';
include_once 'produit.php';







$mot = 0;
$mananger = new Manager();

$produits = $mananger->readAll();


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
      <div class="panel-heading">Liste des produit disponible</div>
      <div class="panel-body">
        
        <form method="POST" action="recherche.php" class="form-inline">
          <div class="form-group">
            <input type="text" name="quantite" placeholder="Entrez la quantite">
            <input type="submit" name="submit" value="Rechercher" class="btn btn-success">
            <a href="form_create_produit.php">Nouveau Produit <img src="plus.png" style="width:3%"></a></a>
          </div>
        </form>
      </div>
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
           
    <?php foreach($produits as $produit):?>
    
           
            <tr>
             <?php if ($produit->getQuantite()< 10) {     ?>
                
                <td style="color:red;"><?=$produit->getNom() ?></td>
              <?php } else {?>
              <td> <?= $produit->getNom() ?></td>
            <?php } ?>
               <td><?= $produit->getPrix() ?> </td>
               
               <td><?=$produit->getQuantite() ?></td>
               <?php $mot = $produit->getPrix()*$produit->getQuantite();  ?>
               <td><?= $mot ?></td>
       <td><a href="form_mod_prod.php?id=<?= $produit->getId()  ?>">
        <img src="mod.png" style="width:10%; text-align: center;">
        </a></td>
    <td><a href="deleteProduit.php?id=<?= $produit->getId() ?>"> 
        <img src="sup.png" style="width:8%"></span></a></td>
      
            </tr>
        <?php endforeach; ?>
           
          </tbody>
</table>
      
    </div>
  </div> 

</body>
</html>





