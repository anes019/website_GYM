<?php
$connect = mysqli_connect("localhost", "root", "", "site_web");
$query = "SELECT * FROM pub";
 $result = mysqli_query($connect, $query);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Charts</title>

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
<style type="text/css">
    #piechart_3d
    { height: 200px;
        width: 600px;
        



    }



</style>
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['City', 'nombre de likes'],
                                 <?PHP

 while($row = mysqli_fetch_array($result))
 {  
    echo "['".$row['id']."',".$row['nb']."],";
}

?>
      ]);

      var options = {
        title: '',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'NB_Like',
          minValue: 0
        },
        vAxis: {
          title: ' ID_PUB'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }


      
    </script>
<?php
$connect1 = mysqli_connect("localhost", "root", "", "site_web");
$query1 = "SELECT * FROM pub";
 $result1 = mysqli_query($connect1, $query1);


?>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
                                <?PHP

 while($row1 = mysqli_fetch_array($result1))
 {  
    echo "['".$row1['id']."',".$row1['nb']."],";
}

?>

        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>


</head>

<body class="animsition">
    

                <!-- MENU SIDEBAR-->
       
        <!-- PAGE CONTAINER-->
     <div class="page-container">
            <!-- HEADER DESKTOP-->
            
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
     
                         

                                    
                                      
                                       
                                                    <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                                         <div class="row">
                            <div class="col-lg-6">
                                         <div class="au-card m-b-30">
                                            <div class="au-card-inner">
                                               <h3 class="title-2 m-b-40">Nombre de Like sur les PUBS</h3>
                                       <div id="chart_div"></div>
                                           
                                       </div>
                                   </div>
                               </div>
                           
                                   
                             

                                        
                            <div class="col-lg-6">
                                         <div class="au-card m-b-30">
                                            <div class="au-card-inner">
                                                <h3 class="title-2 m-b-40">Nb like (Pie)</h3>

                                       <div id="piechart_3d">

                                          </div> 
                                         </div>  
                                       
                                   </div>
                                   </div>
                               </div>
                                </div>
                            </div>
                        </div>
                           
        <!-- END PAGE CONTAINER-->

 

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

</body>

</html>
<!-- end document-->
