<?php include'session.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Adminto - Responsive Admin Dashboard Template</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

        <link href="assets/css/morris.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo"><span>Admin<span>to</span></span><i class="mdi mdi-layers"></i></a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">

                        <!-- Page title -->
                        <ul class="nav navbar-nav list-inline navbar-left">
                            <li class="list-inline-item">
                                <button class="button-menu-mobile open-left">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="page-title">Statistiques</h4>
                            </li>
                        </ul>

                        <nav class="navbar-custom">

                            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                                <li>
                                    <!-- Notification -->
                                    <div class="notification-box">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a href="javascript:void(0);" class="right-bar-toggle">
                                                    <i class="mdi mdi-bell-outline noti-icon"></i>
                                                </a>
                                                <div class="noti-dot">
                                                    <span class="dot"></span>
                                                    <span class="pulse"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Notification bar -->
                                </li>

                                <li class="hide-phone">
                                    <form class="app-search">
                                        <input type="text" placeholder="Search..."
                                               class="form-control">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>

                            </ul>
                        </nav>
                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php include('left-bar.php') ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <?php
                        include_once  '../config.php';
              // visits by day
           
              $db = config::getConnexion();
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql ="SELECT produit_categorie as label,count(*) as value from produit GROUP by label ORDER BY value DESC LIMIT 5";
          $stmt = $db->prepare($sql);
          $stmt ->execute();
          $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
          $phpobj =json_encode($data);
           $sql2 ="SELECT SUBSTRING(produit_date_ajout,1,10) as daydate,count(*) as visits from produit /*WHERE visitdate >= (CURDATE() - INTERVAL 1 MONTH)*/ GROUP by daydate ORDER BY daydate ASC";
              $stmt2 = $db->prepare($sql2);
              $stmt2 ->execute();
              $data2=$stmt2->fetchAll(PDO::FETCH_ASSOC);
              $phpobj1 =json_encode($data2);
         //echo '<h4> Json Data </h4>';
         // echo json_encode($data);

        
              
              ?>
              
                      

                      

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h3 class="panel-title"></i> Nombre des produits par category  </h3>
                                          </div>
                                          <div class="panel-body">
                                            <div id="morris-donut-chart">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            </div><!-- end col-->

                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h3 class="panel-title"></i> Nombre des Produits ajouter par jour  </h3>
                                          </div>
                                          <div class="panel-body">
                                            <div id="morris-line-chart">
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col-->

                        </div>

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 - 2018 © Adminto. Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
             <?php include 'notification-bar.php' ?>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Flot chart js -->
        <script src="assets/plugins/flot-chart/jquery.flot.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- flot init -->
        <script src="assets/pages/jquery.flot.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script src="assets/js/morris.min.js"></script>
        <script src="assets/js/raphael.min.js"></script>
        <script language="JavaScript" type="text/javascript">
       $(function() {
    var jsobj = <?php echo $phpobj; ?>;
    var jsobj1 = <?php echo $phpobj1; ?>;
    // Donut Chart
    Morris.Donut({
    element: 'morris-donut-chart',
    data:jsobj,

    resize: true});

        // Line Chart
        Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: jsobj1,
        // The name of the data record attribute that contains x-visits.
        xkey: 'daydate',
        // A list of names of data record attributes that contain y-visits.
        ykeys: ['visits'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Produit'],
        // Disables line smoothing
        smooth: false,
        resize: true
    
    });
        });
        </script>
    </body>
</html>