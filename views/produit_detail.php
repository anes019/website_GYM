<?PHP
include "../core/crudsC.php";
$id=$_GET['id'];

$catC=new categorieC();
$listecategorie=$catC->afficher_categorie();
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
  <?PHP
	include'header.php' ;
?>
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
						<td>

							<div class="single-product">																		
								<div class="product-details">
									<div class="name"><?PHP echo $row['nom']; ?></div>
									<br>
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
										<br>
										<h5><?PHP if ($row['gout']!=""){ echo "Gout :  ".$row['gout'];} ?></h5>
										<br>
										<h5><?PHP if ($row['ingredient']!=""){ echo "Ingredient :".$row['ingredient'];} ?></h5>
										<br>
										<h5><?PHP if ($row['poids']!=""){ echo "Poids :".$row['poids'].".Kg";} ?></h5>
										<h5 style="color: red;"><?PHP if ($row['quantite']!=""){ echo "in stock";} 
										else{echo "out of stock";}
										?>																	
										<br> 

										</h5>
							 <td width="40%"> <?php  if ($row['note']==0){echo "veuillez noter ce produit ";?></td>
						<td><a href="ajouter_note.php?id=<?php echo $row['id'];?>&note=1" class="social-info">
												<img  src="images/star_w.png" width="30" height="30">
												</a></td>
						<td><a href="ajouter_note.php?id=<?php echo $row['id'];?>&note=2" class="social-info">
												<img width="30" height="30" src="images/star_w.png">
												</a></td>
						<td><a href="ajouter_note.php?id=<?php echo $row['id'];?>&note=3" class="social-info">
												<img width="30" height="30" src="images/star_w.png">
												</a></td>
						<td><a href="ajouter_note.php?id=<?php echo $row['id'];?>&note=4" class="social-info">
												<img width="30" height="30" src="images/star_w.png">
												</a></td>									
						<td><a href="ajouter_note.php?id=<?php echo $row['id'];?>&note=5" class="social-info">
												<img width="30" height="30" src="images/star_w.png">
												</a></td>
												<?php 
													}
													else{
														for($i=0;$i<$row['note'];$i++){
													?><td>
													<img src="images/star.png" width="30" height="30"></td>
													<?php
													}
												}

												?>																
									</div>
								</div>
							</div>
							</td>
							<td width="40%"></td>
					<td>
							<td width="9%">								
											<a href="" class="social-info">
											<img  src="images/pan.png" >											
											</a>
								<td width="9%">			
										<a href="whichlist_ajout.php?id=<?php echo"$id"?>" class="social-info">
													<img  src="images/wish.png" >	
												</a>
									<td width="9%">
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
  


  </body>