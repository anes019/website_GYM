<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
   <?php 
include 'statistique_walid.php'
?> 
  
    <!-- Title Page-->
       <meta charset="utf-8">
    <title>Data Table</title>
    <script type="text/javascript" src="datatabel/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="datatabel/datatabel/media/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="datatabel/datatabel/media/css/jquery.dataTables.min.css">

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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




<body class="animsition">
<?php 
include 'head.php'
?>
                                       
        <div class="main-content">

                <div class="section__content section__content--p30">
                    <h3 class="title-5 m-b-35">Statistique Like Pubs</h3> 
                    <div class="container-fluid">
                     <div class="row">
 
 <!--stat_1_walid-->        

                            <div class="col-lg-6">
                             <div class="au-card m-b-30">
                              <div class="au-card-inner">
                                       <div id="chart_div"></div>     
                                       </div>
                                   </div>
                               </div>
 <!---end stat_1_walid-->                          
                                   
                             
   <!--stat_2_walid-->           
       <div class="col-lg-6">
             <div class="au-card m-b-30">
             <div class="au-card-inner">
               
 <div id="piechart_3d">
          </div> 
            </div>          
             </div>
             </div>
    <!---end stat_2_walid-->           


            </div>
            </div>
        </div>
        </div>
           



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
</body>

</html>
<!-- end document-->