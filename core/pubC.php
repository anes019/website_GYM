<?PHP
include "C:/wamp64/www/website_GYM/config.php";
class pubC {

	
	function ajouterPub($pub){
		$sql="insert into pub (nom,pos,im,nb,nb_dis) values (:nom, :pos,:im,0,0)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$pub->getNom();
        $pos=$pub->getPos();
        $im=$pub->getIm();
       if(empty($nom) || empty($pos) || empty($im) )
       {
          echo "Erreur";
       }
       else
       {
		$req->bindValue(':nom',$nom);
		$req->bindValue(':pos',$pos);
		$req->bindValue(':im',$im);
		
            $req->execute();
        }   
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}



    function afficherPub(){

    $sql="SElECT * From pub";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
  }


    function supprimerPub($id){
    $sql="DELETE FROM pub where id= :id";
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

  function modifierPub($pub,$id){
    $sql="UPDATE pub SET nom=:nom, pos=:pos,im=:im WHERE id=:id";
    
    $db = config::getConnexion();
 
try{    $id=$_GET['id'];
        $req=$db->prepare($sql);
         
        $nom=$pub->getNom();
        $pos=$pub->getPos();
        $im=$pub->getIm();
    
    $datas = array( ':nom'=>$nom,':pos'=>$pos,':im'=>$im);
  
 $req->bindValue(':id',$id);
    $req->bindValue(':nom',$nom);
    $req->bindValue(':pos',$pos);
    $req->bindValue(':im',$im);

    
    
            $s=$req->execute();
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
    
  }
  function recupererPub($id){
    $sql="SELECT * from pub where id=$id";
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