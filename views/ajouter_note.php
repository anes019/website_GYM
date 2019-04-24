<?PHP

include "../core/ProduitsC.php";
$pC=new ProduitC();
session_start();
$id=$_GET['id'];
$note=$_GET['note'];
if(isset($_SESSION['ID']))     
	          {
$idc=$_SESSION['ID'];
	$pC->ajouternote($id,$note,$idc);
	
    $sql="SELECT AVG(note) from note where id_produit='$id' ";
      $db = config::getConnexion();        
$rate=$db->query($sql);
        $sql="UPDATE produits set note=:note where id='$id'";
         $req=$db->prepare($sql);
    $req->bindValue(':note',$rate);
$req->execute();


      header("Location:produit_detail.php?id=$id");
}else{header("Location:login.php");}

?>