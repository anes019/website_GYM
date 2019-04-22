<?PHP
include "C:/wamp64/www/website_GYM/config.php";
include "C:/wamp64/www/website_GYM/entites/produit.php";
include "C:/wamp64/www/website_GYM/entites/wishlist.php";
class WishlistC {

function ajouter_wishlist($id,$c){
		$sql="INSERT into wishlist (id_produit,id_client) values (:id_produit,:id_client)";
		$db = config::getConnexion();
		try{
		        	$req=$db->prepare($sql);
						$req->bindValue(':id_produit',$id);	
						$req->bindValue(':id_client',$c);			
		            $req->execute();		           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}

	function afficher_wishlist($idc){
	$sql="SELECT * FROM produits as p INNER JOIN wishlist as w ON w.id_produit=p.id where w.id_client='$idc' ";
		$db = config::getConnexion();
		try{	
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
function supprimer_wishlist($idd,$id_c){
		$sql="DELETE FROM wishlist where id_produit=:idd and id_client=:id_c";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id_c',$id_c);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
	?>