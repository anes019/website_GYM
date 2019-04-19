<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    

    <style type="text/css">
        #wiou{
            right: 5%;
            position: absolute;


        }



    </style>
   
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
<body >

        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png"  />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">                                                
                        <li class="active">
                            <a href="affichage_categorie.php">
                                <i class="far fa-check-square"></i>Gestion des Categories</a>
                        </li>
                        <li class="active">
                            <a href="affichage_produits.php">
                                <i class="far fa-check-square"></i>Gestion des Produits</a>
                        </li>
                        <li class="active">
                            <a href="affichage_abonement.php">
                                <i class="far fa-check-square"></i>Gestion des Abonements</a>
                        </li>  
                        <li class="active">
                            <a href="afficher_data.php">
                                <i class="far fa-check-square"></i>Gestion des Pubs et des Promos</a>
                        </li>                    
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->


        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png"  />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="affichage_categorie.php">
                                <i class="far fa-check-square"></i>Gestion des Categories</a>
                        </li>
                        <li class="active">
                            <a href="affichage_produits.php">
                                <i class="far fa-check-square"></i>Gestion des Produits</a>
                        </li>
                        <li class="active">
                            <a href="affichage_abonement.php">
                                <i class="far fa-check-square"></i>Gestion des Abonements</a>
                        </li> 
                        <li class="active">
                            <a href="afficher_data.php">
                                <i class="far fa-check-square"></i>Gestion des Pubs et des Promos</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->


        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
    <form action="crud_pub/ajouter_pub.php">
                                        <button  id="wiou" type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small"><a href="crud_pub/ajouter_pub.php"></a>
                                            <i class="zmdi zmdi-plus"></i>add PUB </button>
                                        </form>
<h3 class="title-5 m-b-35">table Pubs</h3>
  
  
                                    
                                       
                      




 <table id="datatables" class="table table-borderless table-striped table-earning">
 <thead>
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Nom </th>
 <th> Position </th>
  <th> NB_Like </th>
  <th> NB_Dislike </th>
 <th> image </th>
    <th> Delete </th>
 <th> Update </th>

  </tr >
</thead>
<tbody>
<?PHP
include "C:/wamp64/www/website_GYM/core/pubC.php";
$pub1C=new pubC();
$listePubs=$pub1C->afficherPub();
?>

<?PHP
foreach($listePubs as $row){
    ?>
    <tr class="text-center">
    <td><?PHP echo $row['id']; ?></td>
    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['pos']; ?></td>
    <td><?PHP echo $row['nb']; ?></td>
    <td><?PHP echo $row['nb_dis']; ?></td>
    <td>
        <div class="image">
    	<img hight="400px" width="200px" src='crud_pub/<?php echo $row['im']; ?>' >
</div>
    </td>
        <td><form method="POST" action="crud_pub/supprimer_pub.php">
            <button class="btn-danger btn" type="submit" name="supprimer" value="supprimer"><i class="fa fa-ban"></i> Delete </button>

    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    </form>
</td>
        <td><form action="crud_pub/modifierPub.php">
            <button class="btn btn-success"" type="submit" name="supprimer" value="supprimer"><i class="fa fa-dot-circle-o"></i> Update </button>

    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    </form>
    </td>
    </tr>
    <?PHP
}
?>
</tbody>
</table>




<br>
    <form action="crud_promo/ajouter_promo.php">
                                        <button  id="wiou" type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small"><a href="crud_promo/ajouter_pub.php"></a>
                                            <i class="zmdi zmdi-plus"></i>add Promo </button>
                                        </form>

<h3 class="title-5 m-b-35">Table Promotions</h3>

 <table id="datatables1" class=" table table-borderless table-striped table-earning">
 <thead>
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Nom </th>
 <th> IDP </th>
 <th>Pour</th>
    <th> Delete </th>
 <th> Update </th>

  </tr >
</thead>
<?php
$connect = mysqli_connect("localhost", "root", "", "site_web");
$query = "SELECT * FROM promo ";
 $result = mysqli_query($connect, $query);
?>



<?PHP
 while($row = mysqli_fetch_array($result))
 {  ?>
    <tr class="text-center">
    <td><?PHP echo $row['id']; ?></td>
    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['idp']; ?></td>
    <td><?PHP echo $row['pour']; ?>%</td>
    <td><form method="POST" action="crud_promo/supprimerPromo.php">
            <button class="btn-danger btn" type="submit" name="supprimer" value="supprimer"><i class="fa fa-ban"></i> Delete </button>

    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    <input type="hidden" value="<?PHP echo $row['idp']; ?>" name="idp">
    </form>
</td>
        <td><form action="crud_promo/modifierPromo.php">
            <button class="btn btn-success"" type="submit" name="supprimer" value="supprimer"><i class="fa fa-dot-circle-o"></i> Update </button>

    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    </form>
    </td>    
    </tr>


    <?PHP
}
?>



</table>


<br>
<h3 class="title-5 m-b-35">Table Produits En Promo</h3>


 <table id="datatables3" class="table table-borderless table-striped table-earning">

 <thead>
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>

 <th> prix </th>
 <th> prix_promo </th>

 

  </tr >
</thead>
<?php
$connect1 = mysqli_connect("localhost", "root", "", "site_web");
$query1 = "SELECT * FROM produits where etat ='true'";
 $result1 = mysqli_query($connect1, $query1);
?>



<?PHP
 while($row1 = mysqli_fetch_array($result1))
 {  ?>
    <tr class="text-center">
    <td><?PHP echo $row1['id']; ?></td>
    <td><?PHP echo $row1['prix']; ?></td>
    <td><?PHP echo $row1['prix_promo']; ?></td>  
 
    </tr>


    <?PHP
}
?>



</table>

</div>
</div>
</div>
<br>



                                <!-- END DATA TABLE -->
               

    <!-- Jquery JS-->
      <!-- Jquery JS-->
    
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
    <script type="text/javascript">
        $(document).ready( function () {
    $('#datatables').DataTable({
        "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]]
    });
} );
    </script>
        <script type="text/javascript">
        $(document).ready( function () {
    $('#datatables1').DataTable({
        "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]]
    });
} );
    </script>
           <script type="text/javascript">
        $(document).ready( function () {
    $('#datatables3').DataTable({
        "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]]
    });
} );
    </script>
    <!-- Main JS-->
<script src="js/main.js"></script>
</body>

</html>
<!-- end document-->
