<?php  

class Manager
{


/** VARIABLE
*  son role est de permettre de connecter a la base de donnéé
*/
	private $pdo;

/**une variable
*  pdoStatement une propreite qui va stocker la requette prepare ou query
*/

private $pdoStatement;
	
function __construct()
{

$this->pdo = new PDO('mysql:host=localhost;dbname=produit', 'root', '');

}

	/** permet d'inserer un objet a la base de donnée et met a jour l'objet passé en argument 
	* en lui specifient un id
* elle returne true si l'objet est inseré sinon elle va retouner false
*/


 private function create(Produit &$produit)
 {
 	
 	$this->pdoStatement = $this->pdo->prepare('INSERT INTO produit VALUES(NULL, :nom, :prix, :quantite)');


 	//liaison entre l'argument et la base de donnée 

 	$this->pdoStatement->bindValue(':nom', $produit->getNom(), PDO::PARAM_STR);
 	$this->pdoStatement->bindValue(':prix', $produit->getPrix(),PDO::PARAM_STR);
 	$this->pdoStatement->bindValue(':quantite', $produit->getQuantite(), PDO::PARAM_STR);
 	
 	//execution de la requette

 	$executeIsOk = $this->pdoStatement->execute();

 	if (!$executeIsOk) {
 		

 		  return false;
 	}else{
         
         $id = $this->pdo->lastInsertId();

         $produit = $this->read($id);


         return true;

 	}
 	  

 	  	

   

 }

 /** elle recupere un objet a partir de son id
 * id l'identifient du membre
 * elle retourne false si nue erreur est survenu , null si ya aucun objet si elle va retourner le mnmbre
 */
 public function read($id)
 {
 	$this->pdoStatement = $this->pdo->prepare('SELECT * FROM produit WHERE id = :id');

 	// liaison des données 

 	$this->pdoStatement->bindValue(':id', $id, PDO::PARAM_INT);


 	//executio de la requette

 	$executeIsOk = $this->pdoStatement->execute();

 	if ($executeIsOk) {
 		

 		// recuperation de notre resultat

 		$produit = $this->pdoStatement->fetchObject('Produit');

 		if ($produit === false) {
 			
 			return null;
 		}
 		 else
 		 {
 		 	return $produit;
 		 }
 	}

 	  else
 	  {
 	  	return false;
 	  }
 }

 /** recuperationde tout les objets qui existe dans la base de donnée
 *  tout les  membres
 * elle retourne un tableau vide s'il ya aucun membre , ou un tab de membres rempli sinon 
 * elle va retouner false si une erreur survien
 */

public function readAll()
{
	$this->pdoStatement = $this->pdo->query('SELECT * FROM produit ORDER BY nom, prix');

	// tab qui contnir les membres

	$produits = [];

	while($produit = $this->pdoStatement->fetchObject('Produit')) {

		$produits []  = $produit;
		
	}

	return $produits;
}

 /** mise a jour un objet stocké dans la base de donnée
 *@var  un objet de type membre
 *elle retun true en cas de succés sinon false
*/

private function update(Produit $produit)
{
	$this->pdoStatement = $this->pdo->prepare('UPDATE FROM produit SET nom=:nom, prix=:prix, quantite=:quantite WHERE id=:id LIMIT 1');

 // liason des variables

$this->pdoStatement->bindValue(':nom', $produit->getNom(), PDO::PARAM_STR);
$this->pdoStatement->bindValue(':prix', $produit->getPrix(),PDO::PARAM_STR);
$this->pdoStatement->bindValue(':quantite', $produit->getQuantite(), PDO::PARAM_STR);

$this->pdoStatement->bindValue(':id', $produit->getId(), PDO::PARAM_INT);

// return le resultat

 return $this->pdoStatement->execute();


}
//*
//*combinaison des deux methodes create/update , il insere l'objet s'il n'est pas dbd sinon il vas le mise a jour

public function save(Produit $produit)
{
	//si l'objet a un identifient on vas l'inserer
	//sinon on vas le mise a jour

	if (is_null($produit->getId())) {
	
	   return $this->create($produit);
	}else  

	  {
	  	return $this->update($produit);
	  }
}
 /** supprimer un objet stocké dans la base de donnée
 *@var  un objet de type membre
 *elle retun true en cas de succés sinon false
*/

public function delete(Produit $produit)
{
	$this->pdoStatement = $this->pdo->prepare('DELETE FROM produit WHERE id=:id LIMIT 1');

	// liaison des argument\base de donnése

	$this->pdoStatement->bindValue(':id', $produit->getId(), PDO::PARAM_INT);
	

	//resultat de la requette

    return $this->pdoStatement->execute();

}
}



 ?>