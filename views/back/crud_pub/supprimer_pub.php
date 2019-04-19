<?PHP
include "C:/wamp64/www/website_GYM/core/pubC.php";
$pubC=new pubC();
if (isset($_POST["id"])){
	$pubC->supprimerPub($_POST["id"]);
	header('Location: ../afficher_data.php');
}

?>