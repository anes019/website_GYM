<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Muscle - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<script src="validerchampcour.js"></script>
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
      <link rel="stylesheet" href="bluetablee.css">
         <link rel="stylesheet" href="myButton.css">
             <link rel="stylesheet" href="mybuttonn.css">
  </head>
  <body>
  	<?php
     include "header.php"
    ?>
    <!-- END nav -->

    <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Gym Trainer</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Coaches</span></p>
          </div>
        </div>
      </div>
    </section>

    
    <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<h3 class="subheading">Shape Your Body</h3>
            <h2 class="mb-1">Nos Coaches</h2>
          </div>
        </div>
              <div class="container">
    
    		<div class="row">
    			<table class="table">
            <?PHP           
include "../core/coachbC.php";
$coachb1C=new coachbC();
$listecoachs=$coachb1C->affichercoachb();
?>                   
<thead>
<tr>
<th><button class="myButton">Coache</th>
<th></th>
<th><button class="myButton">mail</button></th>
</tr>
</thead>
<tbody> <?PHP 
            foreach($listecoachs as $row1){ ?>
<tr>
<td> <button class="myButton" >Nom: <?php echo $row1['nom'];?>
                  <br>    Prénom: <?php echo $row1['prenom'];?>
                    <br>  Spécialite: <?php echo $row1['specialite'];?>
                      <br> Email: <?php echo $row1['email'];?></button>
     
  </td>
<td> 
  <img id="imagesss" style="width: 330px; height: 330px;" src='back/<?php echo $row1['image']; ?>' >

</td>
<td>
   <form action="mail1.php">
<button class="myButton" type="submit">envoyer mail</button>
  <input type="hidden" value="<?php echo $row1['email'];?>" name="mail">
</form>
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
    		</div>
    	</div>
    </section>

    <section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch img" style="background-image: url(images/about-3.jpg);">
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Reserver coach</h3>
	    			<form method="POST" action="ajoutercoach.php" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" name="nom" id="nom" class="form-control" placeholder="Nom">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text"name="prenom" id="prenom"  class="form-control" placeholder="Prenom">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="date" name="date" id="date"  placeholder="Date">
	            		</div>
		    				</div>
                 
                <div class="form-group ml-md-4">
                  <input type="number" name="tel" id="tel" class="form-control" placeholder="telephone">
                </div>
              </div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		               <SELECT  name="hor" id="hor" size="1">
<OPTION>8am
<OPTION>9am
<OPTION selected>10am
<OPTION>11am
<OPTION>2am
  <OPTION>3am
    <OPTION>4am
      <OPTION>5am
</SELECT>
                    <div >----------------------</div>
		            	
	            		</div>
		    				</div>
                <div class="form-group ml-md-4">
                  <FORM>
                    <?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "site_web";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT nom FROM coachess";

// for method 1

$result1 = mysqli_query($connect, $query);
$options = "";
$options1 = "";
$values = "";
$rowcount=mysqli_num_rows($result1);
if ($rowcount > 0) {
    # code...

while($row1 = mysqli_fetch_array($result1))
{    $values="$row1[0]";
     $options = $options."<option value='$values'>$row1[0]</option>";
}
}

?>
        <select  name="coaches" id="idp">
          <option value="0">choix</option>  
<?php echo $options;?>

        </select>
</FORM>
               
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="message" id="mess" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="reserver" onclick="validerchamp()" class="btn btn-primary py-3 px-4">
		            </div>
	    				</div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>

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
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
</html>