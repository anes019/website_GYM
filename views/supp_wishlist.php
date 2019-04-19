<?PHP

include "../core/wishlistC.php";
$wC=new WishlistC();
// twalli bb session  w el fonction suprimer tz5ou 2 parametre num produit w session id client
	$wC->supprimer_wishlist($_GET['delete']);
	header('Location: affichage_wishlist.php');

?>