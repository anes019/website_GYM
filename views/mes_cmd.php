<?php 
session_start();

 ?>
<?php  
require '_header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>cmd_adr</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<!--===============================================================================================-->

  <link rel="stylesheet" href="css/cart.css"/>
  <script type="text/javascript" src="js/cmd.js"></script>
</head>
<body >
<?php 

 include'head2.php' 
 ?>


      <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Gym Trainer</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
          </div>
        </div>
      </div>
      
      
<section class="cart-section spad" style=" right: 10% ;width: 2000px">
    
        <div class="col-lg-8">
          <div class="cart-table">
            <h3>Vos commandes</h3>
            <div class="cart-table-warp">
              
               <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>nom et prenom</th>                                                
                                                <th>produit commandé</th>
                                                <th>quantite</th>
                                                <th>prix</th>
                                               
                                                <th>adresse</th>
                                                <th>mode livraison</th>
                                                <th>mode paiement</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <?PHP
include "C:/wamp64/www/website_GYM/core/commandeC.php";
include "C:/wamp64/www/website_GYM/core/factureC.php";
            $client=new Clients();
$info=$client->afficherClient($_SESSION['l'],$_SESSION['p']);

foreach($info as $row1){
  $nom_prenom=$row1['Firstname'].' '.$row1['Lastname'];

$commande1C=new commandeC();
$listecommandes=$commande1C->recupererCommandenom($nom_prenom);

foreach($listecommandes as $row){
    ?>                 
                                        <tbody> 

                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                
                                                <td>
                                                   <?PHP echo $row['nom_prenom']; ?> 
                                                </td>
                                                <td>
                                                 <table>
              <thead>
              
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
                     
                      
                    
                </tr>
                
               
              </tbody>
              <?php endforeach; ?>
            </table></td>
                                                   
                                                <td>
                                                    <?PHP echo $row['quantite']; ?>
                                                </td>
                                                <td><?PHP echo $row['prix']; ?></td>
                                                    
                                                
                                               <td>
                                                   <?PHP echo $row['adresse']; ?>
                                                </td>
                                             
                                                <td>
                                                    <?PHP echo $row['mode_livraison']; ?>
                                                </td>
                                                <td>
                                                    
                                                        <?PHP echo $row['mode_paiement']; ?>
                                                    
                                                </td></form>
                                                <td>
                                                  <form action="PDF/html2pdf/examples/index.php" method="POST">
                                                    <button ><image src="images/icons/download.png" style="width:40px">
                                                            <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                       </button>
                                                        </form>
                                                    
    
                                                    
                                                </td>
                                            </tr>


                                                                                        <?PHP
}}
?>
                                        </tbody>

                                    </table>
          </div>
        </div>
  
    </section>
				
			
	</div>
</section>

  <!-- cart section end -->
  
<?php 
include "footer.php"
?>
   

		
	


</body>
</html>