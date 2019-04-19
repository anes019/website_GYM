<?PHP

include "../core/ProduitsC.php";
$pC=new ProduitC();

$id=$_GET['id'];
$note=$_GET['note'];

	$pC->ajouternote($id,$note);
	header("Location:produit_detail.php?id=$id");


?>