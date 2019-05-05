<?php 
 session_start();
 include'header.php' ;

 ?>
<?php  
require '_header.php';
?>


<?PHP
//session_start();
include "../core/ProduitsC.php";
$id=$_GET['id'];

$prC=new ProduitC();
$listeproduit=$prC->recuperer_produit($id);



?>

<head>
    <title>Academie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main2.css">
    <link rel="stylesheet" href="css/linearicons2.css">
    <link rel="stylesheet" href="css/themify-icons2.css">

<style type="text/css">
  		.sale {
	position: relative;
	display: inline-block;
	background: orange;
	color: white;
	height: 80px ;
	width: 80px ;
	border-radius: 8px;
	text-align: center;
	vertical-align: middle;
	line-height: 5rem;
font-size: 160%;
	left: 40%;
	transform: rotate(-20deg);
	animation: beat 1s ease infinite alternate;
	&:before,
	&:after {
		content:"";
		position: absolute;
		background: inherit;
		height: inherit;
		width: inherit;
		top: 0;
		left: 0;
		z-index: -1;
		transform: rotate(30deg);
	}
	&:after {
		transform: rotate(60deg);
	}
}

@keyframes beat {
	from {	transform: rotate(-20deg) scale(1); }
	to {	transform: rotate(-20deg) scale(1.1); }
}


  	</style>


  </head>
  <body  id="produits">

      <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">DETAILS</h1>
          </div>
        </div>
      </div>
    </section>

    
	<div class="container">
		<div class="row">
			
		

			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
					<br> 
				<table class="lattest-product-area pb-40 category-list" id="example" width="">
										<tbody>
											<?php
                                            foreach($listeproduit as $row){ 
                                            	$idp=$row['id'];
                                            	$quan=$row['quantite'];
                                            ?>		
						<tr>
							<?php 
								if ($row['etat']=="true"){
									$pour= (($row['prix']-$row['prix_promo'])/$row['prix'])*100;
							?>
						<span class="sale">-<?PHP echo $pour ?>%</span>
						<?php }?>
							<td><img  src='<?php echo $row['image']; ?>' width="350" height="350" ></td>
							<td width="60 %"></td>

						<td width="100%">

							<div class="single-product">																	
								<div class="product-details">
									<div class="name"><?PHP echo $row['nom']; ?></div>
									
									
									<div class="price">
		<?php if($row['etat']=="false"){ ?>
										<h6>prix: <?PHP echo $row['prix']."dt"; ?></h6>
										<br>

			<?php }else{ ?>		
									<div class="price" >
										<?PHP echo "PRIX_PROMO:";?>
									<br>
										<h6><?PHP echo $row['prix_promo']; ?> <?PHP echo "$";?></h6>
										<br>
											<?PHP echo "PRIX:";?>
									<br>
										<h6 class="l-through"><?PHP echo $row['prix']; ?> <?PHP echo "$";?></h6>
										</div>

			<?php }  ?>											
										<h5><?PHP echo $row['description']; ?></h5>
										
										<h5><?PHP if ($row['gout']!=""){ echo "Gout :  ".$row['gout'];} ?></h5>
										<br>
										<h5><?PHP if ($row['ingredient']!=""){ echo "Ingredient :".$row['ingredient'];} ?></h5>
										<br>
										<h5><?PHP if ($row['poids']!=""){ echo "Poids :".$row['poids'].".Kg";} ?></h5>
										<h5 style="color: red;"><?PHP if ($row['quantite']>0){ echo "in stock";} 
										else{echo "out of stock";}
										?>																	
										<br> 
										</h5>
										<div class="note"> Evaluation : <br><?PHP echo $row['note']; ?> stars</div>

							 <td width="40%"> 								
									</div>
								</div>
							</div>
							</td><td width="100%"></td>
							<td width="80%"></td>
							                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             


<?php	
if(isset($_SESSION['ID']))     
	          {
	          	$idc=$_SESSION['ID'];
	//afficher note          	

$sql=" SELECT * from note where id_client='$idc' and id_produit='$id'";
    $db = config::getConnexion(); 

$listnot=$db->query($sql);

if($listnot->rowCount()) {
 
                                           foreach($listnot as $row){
                                          					
													for($i=0;$i<5;$i++){
														if($row['notee']>$i)
														{
					?>	<td width="80%"><a href="<?php echo "ajouter_note.php?id=".$idp."&note=".($i+1)."" ?> " class="social-info">
												<img width="30" height="30" src="images/star.png">


											<?php }else{ ?>


												<td><a href="<?php echo "ajouter_note.php?id=".$idp."&note=".($i+1)."" ?> " class="social-info">
												<img width="30" height="30" src="images/star_w.png">
											<?php }

													
													}}}

												else{

													for($i=0;$i<5;$i++){
														?>
						<td><a href="<?php echo "ajouter_note.php?id=".$idp."&note=".($i+1)."" ?> " class="social-info">
												<img width="30" height="30" src="images/star_w.png">
												

<?php

												}}}  ?>

									

					<td width="80%">
							<td width="80%">
							<?php if( $quan>0){?>								
											<a href="ajouterPanier.php?id=<?php echo $row['id']?>"  class="addPanier"  >
											 <img src="images/pan.png" title="Panier" alt="Panier" width="40" height="40"></a>					<?php }?>							
											
								<td width="15%">			
										<a href="whichlist_ajout.php?id=<?php echo"$id"?>" class="social-info">
													<img  src="images/wish.png" >	
												</a>
									<td width="15%">
										<a href="supp_wishlist.php?delete=<?php echo $row['id'];?>">
                                            <img  src="images/del.png" > </a>
                                   </td> 
                                  </td> 
                            </td>                  
					</td>
																												
					</tr>						
					
														<?php
														}
														?>
					</tbody>
				</table>
		</div>
	</div>
</div>
								



 <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  
  <script src="js/main.js"></script>
  
<script>
(function($){
 $('.addPanier').click(function(event){
 	$.get($(this).attr('href'),{},function(data){
 		if(data.error){
 			alert(data.message);
 		}else{
 			if(confirm(data.message +'. Voulez vous consulter votre panier ?')){
 				location.href = 'panier.php' ;
 			}else{
 				$('#total').empty.append(data.total);
 				$('#count').empty.append(data.count);
 			}
 		}
 	},'json');
 	return false;
 });
})(jQuery);

  </script>


<script type="text/javascript">
	document.getElementById("sor").addEventListener('change', function () {
    window.location = this.value;
}, false);
</script>

  </body>