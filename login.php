<?php 


 session_start();

 if(isset($_SESSION['erreurLogin']))
  $erreurLogin=$_SESSION['erreurLogin'];
 else{

  $erreurLogin="";
  }

    session_destroy();


?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Se connecter</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
 	
 </head>
 <body>


  <div class="container"  >
  <div class="panel panel-primary " style="margin-top: 60px;">
  	<div class="panel-heading">Se connecter</div>
  	<div class="panel-body">
  	<form method="post" action="seConnecter.php" class="form" style="height:90%" >
      <?php  if(!empty($erreurLogin)) {?>

      <div class="alert alert-danger">
         <?php  echo $erreurLogin ?>

      </div>
      <?php } ?>
      <div class="form-group">
  		<label for="login">login:</label>
  		<input type="text" name="login" placeholder="login" class="form-control" required="required" max-length="20">
      <span id="login_manquant"></span>
      </div>

  <div class="form-group">
  	<label for="pwd">mot de passe:</label>
  	<input type="password" name="motdepasse" placeholder="mot de passe" class="form-control" required="required">
  </div>	

  
 

   	<button type="submit" class="btn btn-success" id="btn_envoi">
   Se connecter</button>
   	 

  </form>	
  <script type="text/javascript">
   var valid=document.getElementById("btn_envoi");
   var login=getElementById("login");
   var login_m=getElementById("login_manquant");
   var login_v =/^[a-zA-Zééîï][a-zèéêàçîï]+([-'\s][a-zA-Zééîï][a-zèéêàçîï]+)?/;
   valid.addEvenetListener('click',f_valid);

   function f_valid(e) {

  if(login.validity.valueMissing){
    e.preventDefault();
    login_m.textContent="login manquant";
    login_m.style.color="red";
  

    else if(login_v.test(login.value)==false){
      evenr.preventDefault();
      login_m.textContent="Format incorrect";
      login_m.style.color="orange";
    }else{

    }

    }
   }


  </script>
  </div>
  </div>
 </div>

 </body>
 </html>








