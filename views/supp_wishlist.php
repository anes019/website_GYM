<?PHP

include "../core/wishlistC.php";
$wC=new WishlistC();
session_start();
	$wC->supprimer_wishlist($_GET['delete'],$_SESSION['ID']);
	header('Location: affichage_wishlist.php');

?>