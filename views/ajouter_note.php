<?PHP

include "../core/ProduitsC.php";
$pC=new ProduitC();
session_start();
$id=$_GET['id'];
$note=$_GET['note'];
if(isset($_SESSION['ID']))     
	          {
	$pC->ajouternote($id,$note,$_SESSION['ID']);
	header("Location:produit_detail.php?id=$id");
}else{header("Location:login.php");}

?>