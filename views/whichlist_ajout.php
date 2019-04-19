<?PHP

include "../core/wishlistC.php";
$wC=new WishlistC();

$id=$_GET['id'];
// fi blast ll "1" twali session l'id mta3 client
	$wC->ajouter_wishlist($id,1);
	header("Location:produit_detail.php?id=$id");


?>