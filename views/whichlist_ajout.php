<?PHP
session_start();
include "../core/wishlistC.php";
$wC=new WishlistC();

$id=$_GET['id'];
if(isset($_SESSION['ID']))     
	          {
	$wC->ajouter_wishlist($id,$_SESSION['ID']);
	header("Location:produit_detail.php?id=$id");
}
else{header("Location:login.php");}

?>