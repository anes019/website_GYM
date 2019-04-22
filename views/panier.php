<?php 
 include'header.php' 
 ?>
<?php  
require '_header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <title>Muscle - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
	<link rel="stylesheet" href="css/cart.css"/>



    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  

</head>
<body>
  	


<section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Gym Trainer</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
          </div>
        </div>
      </div>

	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Votre panier</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Votre panier</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->

	<!-- cart section end -->
	<section class="cart-section spad">
  
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Votre panier</h3>
						<div class="cart-table-warp">
              
							<table>
                <form method="POST" action="panier.php">
							<thead>
								<tr>
									<th class="product-th">Produit</th>
									<th class="quy-th">Quantité</th>
						
									<th class="total-th">Prix</th>
                  <th class="total-th">Actions</th>
								</tr>
							</thead>
							<tbody>
              <?php
              $ids = array_keys($_SESSION['panier']);
              if(empty($ids)){
                $produits = array();
              }else{
                $produits = $DB->query('SELECT * FROM produits WHERE id IN ('.implode(',', $ids).')');
              }

               

               foreach($produits as $produit):
              ?>

								<tr>
									<td class="product-col">
										<img src="<?php echo $produit->image; ?>" alt="">
										<div class="pc-title">
											<h4><?= $produit->nom; ?></h4>
											<p> <?= number_format($produit->prix,3,',',' '); ?>DT</p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					            <div class="pro-qty">
												<input type="text" name="panier[quantite][<?= $produit->id; ?>]" value="<?= $_SESSION['panier'][$produit->id]; ?>" >
											</div>
                    </div>
									</td>
									
									<td class="total-col"><h4><?= number_format($produit->prix,3,',',' '); ?> DT</h4></td>
                  <td class="size-col"><a class="zmdi zmdi-delete" href="panier.php?delPanier=<?= $produit->id; ?> ">supprimer 
                </a>
                    
                   </td>
								</tr>
           
								
								<?php endforeach; ?>
                <input type="submit" value="Recalculer">
							</tbody>
              </form>
						</table>
						</div>
						<div class="total-cost">

              <h6>produits<span id="count"><?= $panier->count(); ?></span></h6>

							<h6>Total <span id="total"><?= number_format($panier->total(),2,',',' ');?>DT</span></h6>
               
						</div>
					</div>
				</div>

				<div class="col-lg-4 card-right">
					<form class="promo-code-form">
						<input type="text" placeholder="Enter promo code">
						<button>Submit</button>
					</form>
					<a href="produits.php" class="site-btn">poursuivre vos achats</a>
					<a href="login.html" class="site-btn sb-dark">finaliser votre commande </a>
				</div>
			</div>
		</div>
  
	</section>
	<!-- cart section end -->


<footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Boost Your Body</a></li>
                <li><a href="#" class="py-2 d-block">Achieve Your Goal</a></li>
                <li><a href="#" class="py-2 d-block">Analyze Your Goal</a></li>
                <li><a href="#" class="py-2 d-block">Improve Your Performance</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        
      </div>
    </footer>
		

</body>
</html>