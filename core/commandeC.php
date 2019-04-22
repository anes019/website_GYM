<?PHP
include "C:/wamp64/www/website_GYM/config.php";
class commandeC {

	
	function ajouterCommande($commande){
		$sql="insert into commande (id,nom_prenom,tel,nom_prod,quantite,prix,adresse,region,ville,mode_livraison,mode_paiement) values (:id,:nom_prenom,:tel,:nom_prod,:quantite,:prix,:adresse,:region,:ville,:mode_livraison,:mode_paiement)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$id=$commande->getId();
        $nom_prenom=$commande->getNom_prenom();
        $tel=$commande->getTel();
        
        $nom_prod=$commande->getNom_prod();
        $quantite=$commande->getQuantite();
    
        $prix=$commande->getPrix();
        $adresse=$commande->getAdresse();
        $region=$commande->getRegion();
        $ville=$commande->getVille();
        $mode_livraison=$commande->getMode_livraison();
        $mode_paiement=$commande->getMode_paiement();
        

        $req->bindValue(':id',$id);
		$req->bindValue(':nom_prenom',$nom_prenom);
		$req->bindValue(':tel',$tel);
		
		$req->bindValue(':nom_prod',$nom_prod);
		$req->bindValue(':quantite',$quantite);

		$req->bindValue(':prix',$prix);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':region',$region);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':mode_livraison',$mode_livraison);
		$req->bindValue(':mode_paiement',$mode_paiement);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCommande(){
		
		$sql="SELECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCommande($id){
		$sql="DELETE FROM commande where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCommande($commande,$id){
		$sql="UPDATE commande SET  nom_prenom=:nom_prenom, tel=:tel, nom_prod=:nom_prod , quantite=:quantite  , prix=:prix ,adresse=:adresse, region=:region, ville=:ville, mode_livraison=:mode_livraison, mode_paiement=:mode_paiement WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{	
        $req=$db->prepare($sql);
        
		
        $nom_prenom=$commande->getNom_prenom();
        
        $tel=$commande->getTel();
        $nom_prod=$commande->getNom_prod();
        $quantite=$commande->getQuantite();
    
        $prix=$commande->getPrix();
        $adresse=$commande->getAdresse();
        $region=$commande->getRegion();
        $ville=$commande->getVille();
        $mode_livraison=$commande->getMode_livraison();
        $mode_paiement=$commande->getMode_paiement();
        
        
        $datas = array( ':nom_prenom'=>$nom_prenom, ':tel'=>$tel , ':nom_prod'=>$nom_prod , ':quantite'=>$quantite , ':prix'=>$prix ,':adresse'=>$adresse,':region'=>$region,':ville'=>$ville,':mode_livraison'=>$mode_livraison, ':mode_paiement'=>$mode_paiement);

$req->bindValue(':id',$id);
		$req->bindValue(':nom_prenom',$nom_prenom);
		
		$req->bindValue(':tel',$tel);
		$req->bindValue(':nom_prod',$nom_prod);
		$req->bindValue(':quantite',$quantite);
	
		$req->bindValue(':prix',$prix);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':region',$region);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':mode_livraison',$mode_livraison);
		$req->bindValue(':mode_paiement',$mode_paiement);
		
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   //echo " Les datas : " ;
  //print_r($datas);
        }
		
	}
	function recupererCommande($id){
		$sql="SELECT * from commande where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function recupererCommandenom($nom){
		$sql="SELECT * from commande where nom_prenom='$nom'";
		$db = config::getConnexion();
		try{

		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
	function recupererC($nom_prenom,$tel,$nom_prod,$quantite,$prix,$adresse,$region,$ville,$mode_livraison,$mode_paiement){

		$sql="SELECT id from commande where nom_prenom='$nom_prenom' AND tel='$tel' AND nom_prod='$nom_prod' AND quantite='$quantite' AND  prix='$prix' AND adresse='$adresse' AND region='$region' AND ville='$ville' AND mode_livraison='$mode_livraison' AND mode_paiement='$mode_paiement' ";
		$db = config::getConnexion();
		try{

		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>