<?PHP
include "../../../core/commandeC.php";
include "../../../core/factureC.php";

$factureC=new factureC();
if (isset($_POST["id"])){
	$factureC->supprimerFacture($_POST["id"]);
	
}
$commandeC=new commandeC();
if (isset($_POST["id"])){
	$commandeC->supprimerCommande($_POST["id"]);
	header('Location: afficherCommande.php');
}
?>