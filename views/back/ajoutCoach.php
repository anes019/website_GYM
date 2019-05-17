<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
  <script type="text/javascript" src="verifcoach.js"></script>
    <!-- Title Page-->
    <title>Gesion des Coaches</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<?php
include "head.php"
?>

        <!-- END MENU SIDEBAR-->


        <!-- PAGE CONTAINER-->
        
            <!-- HEADER DESKTOP-->
       
            <!-- HEADER DESKTOP-->



          <!-- MAIN CONTENT-->
 <!-- Form produits-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Formulaire </strong> Coaches
                                    </div>
                                    <div class="card-body card-block">
                                        <form  method="POST" action="ajoutccc.php" enctype="multipart/form-data" class="form-horizontal">
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nom coach</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nome" name="nom" placeholder="nom " class="form-control"> 
                                                     <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="marque_input" class=" form-control-label">prenom</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="prenom" name="prenom" placeholder="prenom" class="form-control">
                                                     <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>
                                            </div>
                                


                                           
                                           <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="mini-descript_input" class=" form-control-label">specialite</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="specialite" id="specialite" rows="4" placeholder="Contenu..." class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="mail" name="email" placeholder="email" class="form-control"> 
                                                     <small class="help-block form-text">veuillez remplir ce chalmp</small>
                                                </div>

                                            </div>
                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="image" name="image" class="form-control"> 
                                                     
                                                </div>
                                                
                                            </div>




                                       
                                   
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" onclick="verifchamps()">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm" onclick="reset_produits()">
                                             <a href="affichercoach.php">
                                            <i class="fa fa-ban"></i> Return
                                        </button>

                                    </div>
                                    </form>
                                </div>
                                <!-- fin Form produits-->


<!-- Form categories -->
            
                        
                               
   <!-- fin Form categories-->
                                        
                                             
                    </div>
                </div>
            </div>
        

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/produits.js"></script>

</body>

</html>
<!-- end document-->
