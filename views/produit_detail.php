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


  <link rel="stylesheet" href="css/pro/linearicons.css">
  <link rel="stylesheet" href="css/pro/font-awesome.min.css">
  <link rel="stylesheet" href="css/pro/themify-icons.css">
  <link rel="stylesheet" href="css/pro/bootstrap.css">
  <link rel="stylesheet" href="css/pro/owl.carousel.css">
  <link rel="stylesheet" href="css/pro/nice-select.css">
  <link rel="stylesheet" href="css/pro/nouislider.min.css">
  <link rel="stylesheet" href="css/pro/ion.rangeSlider.css" />
  <link rel="stylesheet" href="css/pro/ion.rangeSlider.skinFlat.css" />
  <link rel="stylesheet" href="css/pro/main.css">
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
<?php
                                            foreach($listeproduit as $row){ 
                                            	$idp=$row['id'];
                                            	$quan=$row['quantite'];
                                            ?>
<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src='<?php echo $row['image']; ?>' alt="<?PHP echo $row['nom']; ?>">
						</div>
						
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?PHP echo $row['nom']; ?></h3>


							<?php if($row['etat']=="false"){ ?>
										<h2>prix: <?PHP echo $row['prix']."dt"; ?></h2>
										<br>
			<?php }else{ ?>		
									<div class="price" >
										<?PHP echo "PRIX_PROMO:";?>
									<br>
										<h2><?PHP echo $row['prix_promo']; ?> <?PHP echo "$";?></h2>
										<br>
											<?PHP echo "PRIX:";?>
									<br>
										<h2 class="l-through"><?PHP echo $row['prix']; ?> <?PHP echo "$";?> </h2>



					<?php
														}
														?>
						<ul class="list">
							<li><span>Evaluation :</span><?PHP echo $row['note']; ?>  STARS</li>
							<li><span>Availibility</span>
								<?php if( $quan>0){?> : In Stock <?php }else {?>  : Out Of Stock </a><?php }?></li>
						</ul>
<?php	
if(isset($_SESSION['ID']))     
	          {
	          	$idc=$_SESSION['ID'];
	//afficher note          	

$sql=" SELECT * from note where id_client='$idc' and id_produit='$id'";
    $db = config::getConnexion(); 

$listnot=$db->query($sql);

?>



						<p><?PHP echo $row['description']; ?></p>
<span>Votre note :</span>
<?php
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
<br><br>
						<div class="card_area d-flex align-items-center">
							<?php if( $quan>0){?>								
											<a href="ajouterPanier.php?id=<?php echo $row['id']?>"  class="addPanier"  >
											 <img src="images/pan.png" title="Panier" alt="Panier" width="40" height="40"></a>					<?php }?>
							<a href="whichlist_ajout.php?id=<?php echo"$id"?>" class="social-info">
													<img  src="images/wish.png" >	
												</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>								
<?php
														}
														?>
<br>
<br>
</a>
</td>
</a>
</td>
</a>
</td>
</div>
</div>
</div>
</div>
</div>
</div>
<?php 
include "footer.php"
?>
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
  <script src="js/pro/vendor/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
   crossorigin="anonymous"></script>
  <script src="js/pro/vendor/bootstrap.min.js"></script>
  <script src="js/pro/jquery.ajaxchimp.min.js"></script>
  <script src="js/pro/jquery.nice-select.min.js"></script>
  <script src="js/pro/jquery.sticky.js"></script>
  <script src="js/pro/nouislider.min.js"></script>
  <script src="js/pro/jquery.magnific-popup.min.js"></script>
  <script src="js/pro/owl.carousel.min.js"></script>
  <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="js/pro/gmaps.min.js"></script>
  <script src="js/pro/main.js"></script>
  
  
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