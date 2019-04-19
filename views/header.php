	<?php
	?>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	       <a  href="index.html"><img src="images\logo.png"> </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto" >
	          <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="program.php" class="nav-link">Program</a></li>
	          <li class="nav-item "><a href="coaches.php" class="nav-link">Coaches</a></li>
	          <li class="nav-item"><a href="schedule.php" class="nav-link">Schedule</a></li>
	          <li class="nav-item"><a href="produits.php" class="nav-link">Produits</a></li>
	            <li class="nav-item"><a href="abonements.php" class="nav-link">Abonements</a></li>
	         
	          <?php
    session_start();
	          if(!isset( $_SESSION['l']))     
	          {
	          		?>
	          	         <li class="nav-item"><a href="Inscription.php" class="nav-link">Inscription</a></li>	
	          	         <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
	         <?php 
	     }else {

?>
 					<li class="nav-item"><a href="reclamation.php" class="nav-link">Reclamation</a></li>
 					<li class="nav-item"><a href="page profil.php" class="nav-link">Profil</a></li>
	      <?php   }
	           ?>
	 
	          
	          
	         </ul>
       

            
	      </div>

		  </div>
	  </nav>
<?php
?>