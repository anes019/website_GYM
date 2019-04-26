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

function ajouterPub_liked($client,$id){
    $sql="insert into pub_liked (client,pub) values (:client, :pub)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
    
       
       
    $req->bindValue(':client',$client);
    $req->bindValue(':pub',$id);
       
            $req->execute();
          
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
  }


    function selectPub_liked($client,$id){
$connect = mysqli_connect("localhost", "root", "", "site_web");
$query1 = "SELECT * FROM pub_liked where (client='$client' && pub='$id')";
$result1 = mysqli_query($connect, $query1);
$rowcount=mysqli_num_rows($result1);
return $rowcount;
}
   

   function update_like($id)
{ $connect = mysqli_connect("localhost", "root", "", "site_web");
  $query = "UPDATE pub SET nb=nb+1 WHERE id='$id'";
 $result = mysqli_query($connect, $query);


}

    function afficherPub($page,$pa){

    $sql="SElECT * From pub limit $page,$pa";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
  }


function row_count_Pub(){
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "site_web";


$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$query = "SELECT id FROM produits where etat ='false'";

$result1 = mysqli_query($connect, $query);
$rowcount=mysqli_num_rows($result1);
return $rowcount;

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