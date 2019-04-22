<?PHP
include "C:/wamp/www/crud/config.php";
include "../../../core/factureC.php";

$factureC=new factureC();
if (isset($_POST["id"])){
	$factureC->supprimerFactureID($_POST["id"]);
	header('Location: afficherFacture.php');
}

?>