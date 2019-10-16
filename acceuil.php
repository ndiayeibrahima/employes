<?php  ?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("button").click(function(){
    $("div").animate({left: '50%'});
  });
});
</script> 
</head>
<body>



<p></p>

<div style="background:#98bf21;height:100px;width:100px;position:absolute;"><img src="toubatv.jpg" style="width:100%"></div>
<div></div>

</body>
</html>







<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
<style> 
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
}
</style>
</head>
<body>
 
<center><h2 style="background-color:green; width:70%; margin-top:70px;">Bienvenu dans note page d'acceuil</h2></center>
<CENTER><div id="flip" style="margin-top:60px; width:50%; height:90%; background-color:grey;">

  <H3 
  style="">Cliquer ici pour voir le menu</H3>
<center><button type="submit" name="submit"> Cliquer</button></center></div>

</CENTER>

<center><div id="panel" style="width:50%"> <?php require_once 'menu.php'; ?>  </div></center>

</body>
</html>
