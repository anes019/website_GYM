<?PHP
include "C:/wamp64/www/website_GYM/core/abonementC.php";
$abonC=new abonementC();
$listeabonement=$abonC->afficher_abonement();
?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Academie</title>

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

<body >
    <div class="page-wrapper">
      

        <!-- MENU SIDEBAR-->
        <?php 
include 'head.php'
?>
     
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">                
                         <div >
                            <div >
                                <h3 class="title-5 m-b-35">Liste des Abonnement</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">  
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="formulaire_abonement.php">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>ajouter</button></a>     
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="datatables">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>nom de l'abonement</th>
                                                <th>duree</th>                                                
                                                <th>cours</th>
                                                <th>prix</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <tr class="spacer"></tr>
                                            <?php
                                            foreach($listeabonement as $row){ 
                                            ?>
                                            <tr class="tr-shadow">
                                                
                                                <td><?PHP echo $row['id']; ?></td>
                                                <td><?PHP echo $row['nom_abonement']; ?></td>
                                                <td><?PHP echo $row['duree']; ?></td>
                                                <td><?PHP echo $row['cour']; ?></td>
                                                <td><?PHP echo $row['prix']; ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                             <a href="modif_abonement.php?modif=<?php echo $row['id'];?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Modifier">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button></a>                              
                                                         <a href="supp_abonement.php?delete=<?php echo $row['id'];?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Supprimer">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button></a>
                                                        
                                                </td>
                                            </tr>
                                                <?PHP
                                                    }
                                                    ?>
                                        </tbody>
                                    </table>
                                </div>                               
                            </div>
                        </div>
                                            
                    </div>
                </div>
            </div>
        </div>

    </div>
    

    <!-- Bootstrap JS-->
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
    <script type="text/javascript">
        $(document).ready( function () {
    $('#datatables').DataTable({
        "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]]
    });
} );
    </script>

</body>


<!-- end document-->
