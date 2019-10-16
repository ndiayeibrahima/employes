<?php 
class Produit 
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
  private $prix;


  /**
*  $mel  le mel  du contact 
*/
  private $quantite;

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


  public function setPrix($prix)
  {
  	$this->prix= $prix;

  	return $this;
  }

  /*
  *@var le getter de la propriété prenom
  */

  public function getPrix()
  {
  	return $this->prix;
  }
  

  public function setQuantite($quantite)
  {
  	$this->quantite = $quantite;

  	return $this;
  }

  /*
  *@var le getter de la propriété quantite
  */

  public function getQuantite()
  {
  	return $this->quantite;
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