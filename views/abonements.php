<?PHP
include "../core/abonementC.php";

$aC=new abonementC();
$liste_abo=$aC->afficher_abonement_front();

?>
  <head>
    <title>Academie</title>
    <meta charset="utf-8">
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

	        <?php 
 include'header.php' 
 ?>

    <!-- END nav -->
      <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">ABONEMENTS</h1>
          </div>
        </div>
      </div>
    </section>

    
    <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          
            <h2 class="mb-1"> Nos Abonements</h2>
          </div>
        </div>
<br>
	
				<!-- Start Best Seller -->
			
			<section class="ftco-section">
	  	<div class="container-fluid">
					<div class="row">
						<?php
                                            foreach($liste_abo as $row){ 
                                            ?>
						<!-- single product -->					
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
					<a href="abonement_detail.php?id=<?php echo $row['id'];?>" class="social-info">				
					<img  src='<?php echo $row['image']; ?>' width="200" height="300" ></a>
										
								<div class="product-details">
									<div class="product-details">
									<h6><?PHP echo $row['nom_abonement']; ?></h6>
									<div class="price"><h6>prix: <?PHP echo $row['prix']; ?> dt</h6></div>	
									</div>
				<div class="prd-bottom">
					<a href="abonement_detail.php?id=<?php echo $row['id'];?>" class="social-info">
					<img  src="images/det.png" title="details" >								</a>
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





  </body>
