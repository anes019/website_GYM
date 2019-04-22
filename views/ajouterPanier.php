<?php
require '_header.php';
$json = array('error' => true);
if(isset($_GET['id'])){
	$produit=$DB->query('SELECT id FROM produits WHERE id=:id' , array('id' => $_GET['id']));
	if(empty($produit)){
		$json['message'] = "ce produit n'existe pas";
	}
	
	$panier->ajouter($produit[0]->id);
	$json['error'] = false;
	$json['total'] = $panier->total();
	$json['count'] = $panier->count();
	$json['message']= 'le produit a ete bien ajoute a votre panier ';
	
}else {
	$json['message'] = 'Vous n avez pas selectionner de produit a ajouter dans le panier';
}
echo json_encode($json);
?>