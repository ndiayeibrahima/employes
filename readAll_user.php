<?php 
include_once 'manager.php';
include_once 'utilisateur.php';


$mananger = new Manager();

$utisateurs = $mananger->readAll();




 ?>

 <!DOCTYPE html>
<html lang='en'>
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <meta charset="UTF_8">
  <title>liste utilisateurs</title>
</head>
<body>
 <center><?php require_once 'menu.php'; ?></center> 
  <div class="container" style="margin-top:70px;">
    <div class="panel-primary">
      <div class="panel-heading">Liste des Utilisateurs</div>
      <div class="panel-body">
        
        <form method="POST" action="rechercheUser.php" class="form-inline">
          <div class="form-group">
            <input type="text" name="nom" placeholder="Nom User">
            <input type="submit" name="submit" value="Rechercher" class="btn btn-success">
            <a href="form_create_user.php">Nouvel Utilisateur <img src="plus.png" style="width:3%"></a>
          </div>
        </form>
      </div>
    </div>

    <div class="panel-primary">
      
      <div class="panel-body">
         
      
<table class="table table-striped table-bordered">

          <thead>
            <tr>
            <th>Nom</th><th>login</th>
            <th>Modifier</th><th>Supprimer</th>
            </tr>
          </thead>
          <tbody>
           
    <?php foreach($utisateurs as $utisateur):?>
    
           
            <tr>
             
               <td><?= $utisateur->getNom() ?> </td>
               
               <td><?=$utisateur->getLogin() ?></td>
               
       <td><a  href="form_mod_user.php?id=<?= $utisateur->getId()  ?>"><img src="mod.png" style="width:10%; text-align: center;"></a></td>
    <td><a  onclick="return confirm('Voulez vous vraiement supprimer cette ligne')" href="deleteUser.php?id=<?= $utisateur->getId() ?>"><img src="SUP.png" style="width:10%; text-align: center;"></a></td>
      
            </tr>
        <?php endforeach; ?>
           
          </tbody>
</table>
      
    </div>
  </div> 

</body>
</html>





