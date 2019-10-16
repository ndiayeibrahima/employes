<?php 
class Utilisateur
{
	
	
/**
*  $id  l'identifient du contact il sera generé par le SGBDR 
* on aura pas de setter
*/
private $id;

/**
*  $nom  le nom  du contact 
*/
  private $nom;

 

  /**
*  $tel  le tel  du contact 
*/
  private $login;


  /**
*  $mel  le mel  du contact 
*/
  private $motdepasse;

  /*
  *@var  le setter du nom 
  */

  public function setNom($nom)
  {
  	$this->nom = $nom;

  	return $this;
  }

  /*
  *@var le getter de la propriété nom
  */

  public function getNom()
  {
  	return $this->nom;
  }


  public function setLogin($login)
  {
  	$this->login= $login;

  	return $this;
  }

  /*
  *@var le getter de la propriété prenom
  */

  public function getLogin()
  {
  	return $this->login;
  }
  

  public function setMotdepasse($motdepasse)
  {
  	$this->motdepasse = $motdepasse;

  	return $this;
  }

  /*
  *@var le getter de la propriété quantite
  */

  public function getMotdepasse()
  {
  	return $this->motdepasse;
  }

 



  /*
  *@var le getter de la propriété id
  */

  public function getId()
  {
  	return $this->id;
  }
}

 ?>






















 
