<?PHP
include "C:/wamp64/www/website_GYM/config.php";
include "C:/wamp64/www/website_GYM/entites/categorie.php";
class categorieC {
	
	function ajouter_categorie($categorie){
		$sql="insert into categorie (nom,description) values (:nom,:description)";
		$db = config::getConnexion();
		try{
		        	$req=$db->prepare($sql);					        
					       
					        $nom=$categorie->getnom();
					        $description=$categorie->getdescription();
					        					
									$req->bindValue(':nom',$nom);
									$req->bindValue(':description',$description);
									
		            $req->execute();		           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	

	function afficher_categorie(){
		$sql="SElECT id,nom,description From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



	function supprimer_categorie($idd){
		$db = config::getConnexion();
		$sql="DELETE FROM produits where  cat_id=:id_categorie";			
        $req=$db->prepare($sql);	
		$req->bindValue(':id_categorie',$idd);
		try{
            $req->execute();
	$sql="DELETE FROM categorie where id= :idd";
	$req=$db->prepare($sql);	
            $req->bindValue(':idd',$idd);
             $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifier_categorie($categorie,$id){
		$sql="UPDATE categorie SET nom=:nom,description=:description WHERE id=:id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
        												
					        $nom=$categorie->getnom();					        
					        $description=$categorie->getdescription();					       

		$datas = array(':id'=>$id, ':nom'=>$nom,':description'=>$description);
									$req->bindValue(':id',$id);									
									$req->bindValue(':nom',$nom);									
									$req->bindValue(':description',$description);
									
		
		
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recuperer_categorie($id){
		$sql="SELECT * from categorie where id=$id";
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

    
       function rechercher_categorie($mot)
   {
       $sql="SELECT * FROM categorie where id like'%".$mot."%'or nom like'%".$mot."%' ";
 
       $db =config::getConnexion();
       try{
        $list=$db->query($sql);
        return $list;
       }
         catch (Exception $e)
    { die('Erreur:'.$e->getMessage());}
   }
    


?>