<?PHP
include "C:/wamp64/www/website_GYM/config.php";
include "C:/wamp64/www/website_GYM/entites/produit.php";
include "C:/wamp64/www/website_GYM/entites/abonement.php";
include "C:/wamp64/www/website_GYM/entites/categorie.php";
include "C:/wamp64/www/website_GYM/entites/wishlist.php";
class ProduitC {
	
	function ajouter_produit($produit){
		$sql="insert into produits (type,nom,quantite,cat_id,prix,description,ingredient,gout,poids,image) values (:type,:nom,:quantite,:cat_id,:prix,:description,:ingredient,:gout,:poids,:image)";
		$db = config::getConnexion();
		try{
		        	$req=$db->prepare($sql);

					        $type=$produit->gettype();
					        $nom=$produit->getnom();
					        $quantite=$produit->getquantite();
					        $cat_id=$produit->getidcat();
					        $prix=$produit->getprix();
					        $description=$produit->getdescription();
					        $ingredient=$produit->getingredient();
					        $gout=$produit->getgout();
					        $poids=$produit->getpoids();	
					        $image=$produit->getimage();

									$req->bindValue(':type',$type);
									$req->bindValue(':nom',$nom);
									$req->bindValue(':quantite',$quantite);
									$req->bindValue(':cat_id',$cat_id);
									$req->bindValue(':prix',$prix);
									$req->bindValue(':description',$description);
									$req->bindValue(':ingredient',$ingredient);
									$req->bindValue(':gout',$gout);
									$req->bindValue(':poids',$poids);
									$req->bindValue(':image',$image);
				
		            $req->execute();		           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}
	
	

	function afficher_produit(){
		$sql="SELECT id,nom,quantite,description,poids,gout,prix,image,etat,prix_promo From produits";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

public static function afficherProd($id_categorie)
   { $db =config::getConnexion();
       $sql="SELECT * FROM produits where cat_id=:id_categorie ";
    $p=$db->prepare($sql);
    $p->bindParam(':id_categorie',$id_categorie);
       
          $p->execute();
              
                 return $p->fetchAll();
      
   } 


   public static function recherche_range($min,$max)
   { $db =config::getConnexion();
       $sql="SELECT * FROM produits where prix between $min and $max";
    $p=$db->prepare($sql);
          $p->execute();
              
                 return $p->fetchAll();
      
   }

   public static function afficherProd_triee($id_categorie,$num)
   { $db =config::getConnexion();
   	if($id_categorie!=0)
   {$sql="SELECT * FROM produits where cat_id=:id_categorie order by id";
      if($num==1) {$sql="SELECT * FROM produits where cat_id=:id_categorie order by nom";}
      if($num==2) {$sql="SELECT * FROM produits where cat_id=:id_categorie order by type";}
      if($num==3) {$sql="SELECT * FROM produits where cat_id=:id_categorie order by prix";}
      if($num==4) {$sql="SELECT * FROM produits where cat_id=:id_categorie order by prix desc";}
    $p=$db->prepare($sql);
    $p->bindParam(':id_categorie',$id_categorie);
       
          $p->execute();
              
                 return $p->fetchAll();
      }
      else
      {
      	$sql="SELECT * FROM produits order by id";
      if($num==1) {$sql="SELECT * FROM produits order by nom";}
      if($num==2) {$sql="SELECT * FROM produits order by type";}
      if($num==3) {$sql="SELECT * FROM produits order by prix";}
      if($num==4) {$sql="SELECT * FROM produits order by prix desc";}
    $p=$db->prepare($sql);       
          $p->execute();              
                 return $p->fetchAll();
      }
   }  



	function supprimer_produit($idd){
		$sql="DELETE FROM produits where id= :idd";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idd',$idd);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifier_produit($produit,$id){
		$sql="UPDATE produits SET  nom=:nom,quantite=:quantite,description=:description,poids=:poids,gout=:gout,prix=:prix,image=:image WHERE id=:id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);       					
					        $nom=$produit->getnom();
					        $quantite=$produit->getquantite();
					       $image=$produit->getimage();
					        $prix=$produit->getprix();
					        $description=$produit->getdescription();
					   
					        $gout=$produit->getgout();
					        $poids=$produit->getpoids();	
					       


		$datas = array( ':nom'=>$nom,':quantite'=>$quantite,':description'=>$description,':poids'=>$poids,':gout'=>$gout,':prix'=>$prix);
									$req->bindValue(':id',$id);									
									$req->bindValue(':nom',$nom);
									$req->bindValue(':quantite',$quantite);						
									$req->bindValue(':prix',$prix);
									$req->bindValue(':description',$description);								
									$req->bindValue(':gout',$gout);
									$req->bindValue(':poids',$poids);
									$req->bindValue(':image',$image);
		
		
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recuperer_produit($id){
		$sql="SELECT * from produits where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	

function afficherbestProduit()
   {
       $sql="SELECT * FROM produits order by note_p desc limit 0,1 ";
       $db =config::getConnexion();
       try{
        $list=$db->query($sql);
        return $list;
       }
         catch (Exception $e)
    { die('Erreur:'.$e->getMessage());}
   }  

function rechercher_produit($mot)
   {
       $sql="SELECT * FROM produits where nom like'%".$mot."%'or id like'%".$mot."%' or type like'%".$mot."%' or gout'%".$mot."%'";
 
       $db =config::getConnexion();
       try{
        $list=$db->query($sql);
        return $list;
       }
         catch (Exception $e)
    { die('Erreur:'.$e->getMessage());}
   }



   public static function affichage_cat_rech($id_categorie,$mot)
   { $db =config::getConnexion();
       $sql="SELECT * FROM produits where cat_id=:id_categorie and nom like'%".$mot."%'or id like'%".$mot."%' or type like'%".$mot."%' or gout'%".$mot."%'";
    $p=$db->prepare($sql);
    $p->bindParam(':id_categorie',$id_categorie);
       
          $p->execute();
              
                 return $p->fetchAll();
      
   }
    function ajouternote($id,$note)
 {
 	$sql="insert into produits (note) values (:note) where id=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		$req->bindValue(':note',$note);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} 


/*
    public function getstats()
    {
        $sql="
select count(produits.nom_p) as val,categorie.nom as nom_pp from produits inner join categorie on categorie.id=produits.id_categorie group by nom_pp";
        $db =config::getConnexion();
        $pst=$db->prepare($sql);
        $pst->execute();
        return $pst->fetchAll();
    }
*/


}














// categorie





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
		$sql="DELETE FROM categorie where id= :idd";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idd',$idd);
		try{
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
        					$id=$categorie->getid();							
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



















//abonement

class abonementC {
	
	function ajouter_abonement($abonement){
		$sql="insert into abonement (nom_abonement,cour,duree,prix,image) values (:nom_abonement,:cour,:duree,:prix,:image)";
		$db = config::getConnexion();
		try{
		        	$req=$db->prepare($sql);

					        
					        $nom_abonement=$abonement->getnom_abonement();
					        $cour=$abonement->getcour();
					        $duree=$abonement->getduree();
					        $prix=$abonement->getprix();	
					        $image=$abonement->getimage();
									
									$req->bindValue(':nom_abonement',$nom_abonement);
									$req->bindValue(':cour',$cour);
									$req->bindValue(':duree',$duree);
									$req->bindValue(':prix',$prix);
									$req->bindValue(':image',$image);
				
		            $req->execute();		           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	

	function afficher_abonement(){
		$sql="SElECT id,nom_abonement,duree,cour,prix From abonement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficher_abonement_front(){
		$sql="SElECT * From abonement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



	function supprimer_abonement($idd){
		$sql="DELETE FROM abonement where id= :idd";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idd',$idd);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifier_abonement($abonement,$id){
		$sql="UPDATE abonement SET nom_abonement=:nom_abonement,cour=:cour,duree=:duree,prix=:prix,image=:image WHERE id=:id"; //image=:imag
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
        					$nom_abonement=$abonement->getnom_abonement();
					        $cour=$abonement->getcour();
					        $duree=$abonement->getduree();
					        $prix=$abonement->getprix();	
					       $image=$abonement->getimage();


		$datas = array(':nom_abonement'=>$nom_abonement,':cour'=>$cour,':duree'=>$duree,':prix'=>$prix, ':image'=>$image);
									$req->bindValue(':id',$id);
									$req->bindValue(':nom_abonement',$nom_abonement);
									$req->bindValue(':cour',$cour);
									$req->bindValue(':duree',$duree);
									$req->bindValue(':prix',$prix);
									$req->bindValue(':image',$image);
		
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recuperer_abonement($id){
		$sql="SELECT * from abonement where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
function acheter_abonement($id_abonement,$id_client){
		$sql="insert into client (id_abonement) values (:id_abonement) where id=:id_client";
		$db = config::getConnexion();
		try{
		        	$req=$db->prepare($sql);
									$req->bindValue(':id_abonement',$id_abonement);				
		            $req->execute();		           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}


}
















//wishlist


class WishlistC {

function ajouter_wishlist($id,$c){
		$sql="insert into wishlist (id_produit,id_client) values (:id_produit,:id_client)";
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

	function afficher_wishlist_products_client($iddd){
		$sql="SElECT * FROM produits as p INNER JOIN wishlist as w ON w.id_produit=p.id where w.id_client=:iddd";
		$db = config::getConnexion();

		try{
			$req->bindValue(':iddd',$iddd);	
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficher_wishlist(){
		$sql="SElECT * FROM produits as p INNER JOIN wishlist as w ON w.id_produit=p.id";
		$db = config::getConnexion();
		try{	
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
function supprimer_wishlist($idd){
		$sql="DELETE FROM wishlist where id_client= :idd";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idd',$idd);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}






}



//promo



class promoC {

	
	function ajouterPromo($promo){
		$sql="insert into promo (nom,idp,pour) values (:nom, :idp,:pour)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$promo->getNom();
        $idp=$promo->getIdp();
        $pour=$promo->getPour();
       if(empty($nom) || empty($idp) || empty($pour) )
       {
          echo "Erreur";
       }
       else
       {
		$req->bindValue(':nom',$nom);
		$req->bindValue(':idp',$idp);
		$req->bindValue(':pour',$pour);
		
            $req->execute();
        }   
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}



    function afficherPromo(){

    $sql="SElECT * From promo";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
  }


    function supprimerPromo($id){
    $sql="DELETE FROM promo where id= :id";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }

  function modifierPromo($promo,$id){
    
    $sql="UPDATE promo SET nom=:nom, idp=:idp,pour=:pour WHERE id=:id";
   
    $db = config::getConnexion();
 
try{    $id=$_GET['id'];
        $req=$db->prepare($sql);
        

        $nom=$promo->getNom();
        $idp=$promo->getIdp();
        $pour=$promo->getPour();
    
    $datas = array( ':nom'=>$nom,':idp'=>$idp,':pour'=>$pour);
  
 $req->bindValue(':id',$id);
    $req->bindValue(':nom',$nom);
    $req->bindValue(':idp',$idp);
    $req->bindValue(':pour',$pour);

    
    
            $s=$req->execute();
         
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
    
  }

  function updatePromo_Produit($id,$pour){
    $sql="UPDATE produits SET  prix_promo=prix-prix*$pour/100 WHERE id=:id";
    
    $db = config::getConnexion();
 
try{    
        $req=$db->prepare($sql);
 $req->bindValue(':id',$id);
           $s=$req->execute();
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;

        }
    
  }
  function suppPromo_Produit($id){
    $sql="UPDATE produits SET etat='false', prix_promo=0 WHERE id=:id";
    
    $db = config::getConnexion();
 
try{    
        $req=$db->prepare($sql);
         
        
        
    
  
 $req->bindValue(':id',$id);


    
    
            $s=$req->execute();
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;

        }
    
  }

  function modifierPromo_Produit($id,$pour){
    $sql="UPDATE produits SET etat='true', prix_promo=prix-prix*$pour/100 WHERE id=:id";
    
    $db = config::getConnexion();
 
try{    
        $req=$db->prepare($sql);
         
        
        
    
  
 $req->bindValue(':id',$id);


    
    
            $s=$req->execute();
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;

        }
    
  }


  function recupererPromo($id){
    $sql="SELECT * from promo where id=$id";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
  function rechercherPromo($id){
  
    $con=mysqli_connect("localhost","root","","crud");
// Check connection

$sql="SELECT * FROM pub where id=$id";

$result=mysqli_query($con,$sql);
  
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
   
  // Free result set
 
return $rowcount;

}
	
}

?>