<?PHP
include "../config.php";
class Clients {

	 function id()
	{
		$sql=" select ID_CLIENT from Client ORDER BY ID_CLIENT DESC LIMIT 1" ;
		$db = config::getConnexion();
      $req=$db->prepare($sql);
     $req->execute(); 

$result = $req->fetch();

$C1 = $result[0];
//echo $C1;
  return $C1;


}

		
	
	function ajouterClient($Client){
		$sql="insert into client (USERNAME,EMAIL,PASSWORD,Firstname,Lastname,mobile,sexe,IMAGE,BIRTHDAY,adresse,token) values (:USERNAME,:EMAIL,:PASSWORD ,:Firstname,:Lastname,:mobile,:sexe,:IMAGE,:BIRTHDAY,:adresse,:token)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $USERNAME=$Client->getUsername();
        $EMAIL=$Client->getEmail();
        $PASSWORD=$Client->getPWD();
        $Firstname=$Client->getFIRSTNAME();
        $Lastname=$Client->getLASTNAME();
        $BIRTHDAY=$Client->getBirthday();
        $IMAGE=$Client->getImage();
        $mobile=$Client->getMobile();
        $sexe=$Client->getSexe();
        $adresse=$Client->getAdresse();
         
    $token=$Client->getToken();

		$req->bindValue(':USERNAME',$USERNAME);
		$req->bindValue(':EMAIL',$EMAIL);
		$req->bindValue(':PASSWORD',$PASSWORD);
		$req->bindValue(':Firstname',$Firstname);
		$req->bindValue(':Lastname',$Lastname);
		$req->bindValue(':BIRTHDAY',$BIRTHDAY);
		$req->bindValue(':IMAGE',$IMAGE);
		$req->bindValue(':mobile',$mobile);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':adresse',$adresse);
	$req->bindValue(':token',$token);
          $req->execute();
           
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}


	
	function modifierClient($Client,$ID){
		
		$sql="UPDATE Client SET USERNAME=:USERNAME,adresse=:adresse,mobile=:mobile,EMAIL=:EMAIL  WHERE ID_CLIENT='$ID' ";
		$db = config::getConnexion();
	  
		try{
			
        $req=$db->prepare($sql);
		$USERNAME=$Client->getUsername();
        $EMAIL=$Client->getEmail();
        $mobile=$Client->getMobile();
        $adresse=$Client->getAdresse();
      
          
		$req->bindValue(':USERNAME',$USERNAME);
		$req->bindValue(':EMAIL',$EMAIL);
		$req->bindValue(':mobile',$mobile);
		$req->bindValue(':adresse',$adresse);
		
        $req->execute();
        
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}

function modifierImage($Client,$login,$pwd){
		
		$sql="UPDATE Client SET IMAGE=:IMAGE WHERE (USERNAME='$login' && PASSWORD='$pwd') || (EMAIL='$login' && PASSWORD='$pwd')";
		$db = config::getConnexion();
	  
		try{
			
        $req=$db->prepare($sql);
		$IMAGE=$Client->getImage();
   
      
          
		$req->bindValue(':IMAGE',$IMAGE);

		
        $req->execute();
        
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}

	function modifierMDP($Client,$login,$pwd){
		
		$sql="UPDATE Client SET PASSWORD=:PASSWORD  WHERE (USERNAME='$login' && PASSWORD='$pwd') || (EMAIL='$login' && PASSWORD='$pwd')";
		$db = config::getConnexion();
	  
		try{
			
        $req=$db->prepare($sql);
		$PASSWORD=$Client->getPWD();
   
      
          
		$req->bindValue(':PASSWORD',$PASSWORD);

		
        $req->execute();
        
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}

	
	function afficherClient($login,$pwd){
		$sql="SElECT * From client WHERE (USERNAME='$login' && PASSWORD='$pwd') || (EMAIL='$login' && PASSWORD='$pwd')";
		$db = config::getConnexion();
		try{
		$info=$db->query($sql);
		return $info;
		}
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        }	
	}


function afficherClients(){


	$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$info=$db->query($sql);
		return $info;
		}
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        }	
	}



function entete(){


		$sql="DESC client";
		$db = config::getConnexion();
		try{
		$requete=$db->query($sql);
		$entete = $requete->fetchAll();
		return $entete;
		}
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        }	
	}


	function NombreReclamation_tr($id){
 
			$sql=" SELECT COUNT(*)   FROM reclamation WHERE (ID_client='$id' and ETAT='not treated ')" ;
		$db = config::getConnexion();
		try{
      $req=$db->prepare($sql);
     $req->execute(); 

$result = $req->fetch();
echo $result[0];
 }

catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }

	}

	function NombreReclamation($ID){
         
			$sql=" SELECT COUNT(*)   FROM reclamation WHERE  ID_CLIENT='$ID'" ;
		$db = config::getConnexion();
		try{
      $req=$db->prepare($sql);
     $req->execute(); 

$result = $req->fetch();
echo $result[0];
 }

catch (Exception $err){

  }

	}





 function activer($email){
         $var= $email ;
        

 		$sql ="UPDATE client SET EmailConfirmed='1' WHERE token='$var'";
 		$db = config::getConnexion();
 		try{
    
      $req=$db->prepare($sql);
     $req->execute(); 
			echo 'Your email has been verified! You can log in now!';
			echo $var;
			
			   return ("ok");
			}

catch (Exception $err){
 return ("no");
  }

		

 
}





  function REChClient($search){
         $var=$search;

        $query = "
  SELECT * FROM client 
  WHERE ID_CLIENT LIKE '%".$var."%'
  OR USERNAME LIKE '%".$var."%' 
  OR Firstname LIKE'%".$var."%' 
  OR Lastname LIKE '%".$var."%' 
  OR EMAIL LIKE '%".$var."%'
    OR mobile LIKE '%".$var."%'
    ORDER BY ID_CLIENT DESC
  ";

     $db = config::getConnexion();
        try{
           return ( $db->query($query));
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             
        }
        
    }


  function AFFClient(){
         
        $query = "
  SELECT * FROM client ORDER BY ID_CLIENT DESC ";

     $db = config::getConnexion();
        try{
           return ( $db->query($query));
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             
        }
        
    }


  function SuppClient($id){
         $var=$id;
        $sql = "DELETE FROM client WHERE ID_CLIENT ='". $var. "'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
        
    }
		
	
	function ajouterClient2($a,$b,$c,$d,$e,$r){
		$sql="insert into client (Firstname,Lastname,EMAIL,mobile,BIRTHDAY,adresse) values (:Firstname,:Lastname,:EMAIL,:mobile,:BIRTHDAY,:adresse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
       $Firstname=$a;
        $Lastname=$b;
        $EMAIL=$c;
        $BIRTHDAY=$d;
       
        $adresse=$e;
          $mobile=$r;
		$req->bindValue(':EMAIL',$EMAIL);
	
		$req->bindValue(':Firstname',$Firstname);
		$req->bindValue(':Lastname',$Lastname);
		$req->bindValue(':BIRTHDAY',$BIRTHDAY);
		$req->bindValue(':mobile',$mobile);
		$req->bindValue(':adresse',$adresse);
          $req->execute();
           
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }
		
	}


	function modifierClient2($column_name,$text,$id){
		
		$sql = "UPDATE client SET ".$column_name."='".$text."' WHERE ID_CLIENT='".$id."'";  
		$db = config::getConnexion();
	  
		try{
			
        $req=$db->prepare($sql);
        $req->execute();
        return('ok');
        
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
            return('NO');
        }
		
	}



function entete2(){


		$sql="DESC client";
		$db = config::getConnexion();
		try{
		$requete=$db->query($sql);
		$entete = $requete->fetchAll();
		return $entete;
		}
        catch (Exception $err){
            die('Erreur: '.$err->getMessage());
        }	
	}


	function NombreReclamation_tr2(){
			$sql=" SELECT COUNT(*)   FROM reclamation WHERE (ID_client='32' and ETAT='not treated ')" ;
		$db = config::getConnexion();
		try{
      $req=$db->prepare($sql);
     $req->execute(); 

$result = $req->fetch();
echo $result[0];
 }

catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
        }

	}

	function NombreReclamation2(){
			$sql=" SELECT COUNT(*)  as tr   FROM reclamation " ;
		$db = config::getConnexion();
		try{
    
return ( $db->query($sql));

 }

catch (Exception $err){

  }

	}


        function Enable($id){
         $var=$id;
       $sql = "UPDATE client SET  status = 'active' WHERE ID_CLIENT = '".$var."'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
        
    }
        function Disable($id){
         $var=$id;
       $sql = "UPDATE client SET  status = 'Blocked' WHERE ID_CLIENT = '".$var."'";  
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
       
          $req->execute();
           return ("ok");
        }
        catch (Exception $err){
            echo 'Erreur: '.$err->getMessage();
             return ("no");
        }
        
    }
















}

?>