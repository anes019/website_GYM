<?php 
 session_start();
 include'header.php' ;

 ?>
<?php  
require '_header.php';
?>




<?PHP
include "../core/abonementC.php";
$id=$_GET['id'];
$aC=new abonementC();
$liste_abo=$aC->recuperer_abonement($id);


?>



<head>
    <title>Academie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="CodePixar">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">

  <!--
      CSS
      ============================================= -->
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

  </head>
  <body  id="produits">
  

    <!-- END nav -->
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
                                            foreach($liste_abo as $row){ 
                                            ?>

<div class="product_image_area">
    <div class="container">
      <div class="row s_product_inner">
        <div class="col-lg-6">
          <div class="s_Product_carousel">
            <div class="single-prd-item">
              <img class="img-fluid" src='<?php echo $row['image']; ?>' alt="">
            </div>
            
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="s_product_text">
            <h3><?PHP echo $row['nom_abonement']; ?></h3>
            <h3>PRIX :</h3>     <h2><?PHP echo $row['prix']."dt"; ?></h2>
           
 <h3> DUREE :</h3>     <h2> <?PHP echo $row['duree']; ?></h2>
  <h3> COUR :</h3>   <h2> <?PHP echo $row['cour'];?></h2>
           
          </div>
        </div>
      </div>
    </div>
  </div>









                          <?php
                            }
                            ?>
        
</body>















<br>
<br>
<br>
<br>
<br>

<?php 
include "footer.php"
?>
    

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