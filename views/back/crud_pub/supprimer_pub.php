<?PHP

include "C:/wamp64/www/website_GYM/core/pubC.php";
$pubC=new pubC();
if (isset($_GET["id"])){
	$pubC->supprimerPub($_GET["id"]);

echo"<script language=\"javascript\">";
echo"window.location.href='../afficher_data.php?page=1&sort=2&trie=0'";
echo"</script>";
}
?>