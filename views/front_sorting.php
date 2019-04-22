<?PHP

include "../core/crudsC.php";
$idc=$_GET['cat'];
$num=$_GET['sort'];
$catC=new categorieC();
$listecategorie=$catC->afficher_categorie();
$prC=new ProduitC();
$listeproduit=$prC->afficherProd_triee($idc,$num);

?>
<style type="text/css">
  		.sale {
	position: relative;
	display: inline-block;
	background: orange;
	color: white;
	height: 40px ;
	width: 40px ;
	border-radius: 8px;
	text-align: center;
	vertical-align: middle;
	line-height: 2.5rem;

	left: 80%;
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
            <h1 class="mb-3 bread">Gym Trainer</h1>
          </div>
        </div>
      </div>
    </section>

    
    <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          
            <h2 class="mb-1">Nos Produits</h2>
          </div>
        </div>

	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<br>
				<br>
				<div class="sidebar-categories">
					<div class="head">Browse Categories</div>
					<ul class="main-categories">
											<?php
                                            foreach($listecategorie as $row){ 
                                            ?>
						<li class="main-nav-list">
							<a  href="cat_front.php?cat=<?php echo $row['id'];?>" ><span class="lnr lnr-arrow-right"></span><?PHP echo $row['nom']; ?></a>			
						</li>
											<?PHP
                                             }
                                             ?>						
					</ul>
				</div>
			</div>
	

			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
					<br> 
			
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<select id="sor">
							<option value="#">Default sorting</option>
							<option value="front_sorting.php?sort=5&cat=<?php echo"$idc"?> ">Promotion</option>
							<option  value="front_sorting.php?sort=1&cat=<?php echo"$idc"?> ">Par nom</option>
							<option value="front_sorting.php?sort=2&cat=<?php echo"$idc"?> ">Par Type</option>
							<option value="front_sorting.php?sort=3&cat=<?php echo"$idc"?> ">Prix croissant</option>
							<option value="front_sorting.php?sort=4&cat=<?php echo"$idc"?> ">Prix decroissant</option>
						</select>
					</div>					
				</div>
				<!-- End Filter Bar -->






				
			<section class="ftco-section">
	  	<div class="container-fluid">
					<div class="row">
						<?php
                                            foreach($listeproduit as $row){ 
                                            ?>
						<!-- single product -->					
						<div class="col-lg-4 col-md-6">

							<div class="single-product">
								
				<?php 
				if($row['etat']=="false"){
				?>
<br><br>
								<a href="produit_detail.php?id=<?php echo $row['id'];?>" class="social-info">
									<img  src='<?php echo $row['image']; ?>' width="200" height="250" >
									</a>
								
								<div class="product-details">
									<div class="product-details">
									<h6><?PHP echo $row['nom']; ?></h6>
									<div class="price"><h6>PRIX: <?PHP echo $row['prix']; ?> dt</h6></div>	
								</div>


				<?php 	}
				else{
					$pour= (($row['prix']-$row['prix_promo'])/$row['prix'])*100;
				?>

										<a href="produit_detail.php?id=<?php echo $row['id'];?>" class="social-info">
							<span class="sale">-<?PHP echo $pour ?>%</span><img  src='<?php echo $row['image']; ?>' width="200" height="250" >
									</a>
								
								<div class="product-details">
									<div class="product-details">
									<h6><?PHP echo $row['nom']; ?></h6>
									<div class="price" >
										<h6> PRIX Promo: <?PHP echo $row['prix_promo']; ?> <?PHP echo "$";?></h6>
									<br>
									<h6>PRIX: </h6><h6 class="l-through"><?PHP echo $row['prix']; ?> <?PHP echo "$";?></h6>
									
					
										</div>
										
								</div>
				<?php	}
				?>



									<div class="prd-bottom">
												<a href="whichlist_ajout.php?id=<?php echo $row['id']?>"  class="social-info">
													<img class="img-fluid" src="images/wish.png"  title="wishlist">	
												</a>
								
												<a href="produit_detail.php?id=<?php echo $row['id'];?>" class="social-info">
													<img class="img-fluid" src="images/det.png" title="details" >											
												</a>
									</div>

								</div>
								
										</div>
						
						</div>
						<?php
					}
					?>	
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
 
  <script src="js/main.js"></script>

<script type="text/javascript">
	document.getElementById("sor").addEventListener('change', function () {
    window.location = this.value;
}, false);
</script>


  </body>
