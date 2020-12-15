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

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        
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
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                        </ul>

                        <nav class="navbar-custom">

                            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                                <li>
                                    <!-- Notification -->
                                    <div class="notification-box">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a href="javascript:void(0);" class="right-bar-toggle"" >
                                                    <i class="mdi mdi-bell-outline noti-icon"></i>
                                                </a>
                                                <div class="noti-dot" >
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


                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <?php
                                        include_once '../core/commandeC.php';
                                        include_once '../core/produitC.php';
                                        $comm=new CommandeC();
                                        $prod=new ProduitManage();
                                        $result=$comm->meilleureVente();
                                        $ventes=$comm->commandesCeMois();
                                        $ventes1=$comm->commandesMoisDernier();
                                        if($ventes['total']==null)
                                        {
                                            $ventes['total']=0;
                                        }
                                        $articles=$comm->articlesCeMois();
                                        if ($ventes1['total']>0)
                                            $augmentation=round((($ventes['total']-$ventes1['total'])/$ventes1['total'])*100);
                                        else
                                            $augmentation=0;
                                        $best=$prod->recupererProduitBest($result['id_produit']);
                                    ?>

                                    <h4 class="header-title mt-0 m-b-30">Commandes</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                                               data-bgColor="#F9B9B9" value="<?php echo $ventes['nbrCommandes']%100 ?>"
                                               data-skin="tron" data-angleOffset="180" data-readOnly=true
                                               data-thickness=".15"/>
                                        </div>

                                        <div class="widget-detail-1">
                                            <h2 class="p-t-10 mb-0"> <?php echo $ventes['nbrCommandes'] ?> </h2>
                                            <p class="text-muted m-b-10">Ce mois</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 m-b-30">Profits</h4>

                                    <div class="widget-box-2">
                                        <?php if($augmentation>=0){ ?>
                                        <div class="widget-detail-2">
                                            <span class="badge badge-success badge-pill pull-left m-t-20"><?php echo $augmentation ?>% <i class="mdi mdi-trending-up"></i> </span>
                                            <h2 class="mb-0"> <?php echo number_format($ventes['total'],2,',',' ') ?> </h2>
                                            <p class="text-muted m-b-25"> DT ce mois</p>
                                        </div>
                                        <div class="progress progress-bar-success-alt progress-sm mb-0">
                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 100%;">
                                                <span class="sr-only">77% Complete</span>
                                            </div>
                                        </div>
                                        <?php } else { ?>
                                        <div class="widget-detail-2">
                                            <span class="badge badge-danger badge-pill pull-left m-t-20"><?php echo $augmentation ?>% <i class="mdi mdi-trending-down"></i> </span>
                                            <h2 class="mb-0"> <?php echo number_format($ventes['total'],2,',',' ') ?> </h2>
                                            <p class="text-muted m-b-25"> DT ce mois</p>
                                        </div>
                                        <div class="progress progress-bar-success-alt progress-sm mb-0">
                                            <div class="progress-bar progress-bar-danger" role="progressbar"
                                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: <?php echo 100-$augmentation ?>%;">
                                                <span class="sr-only">100% Complete</span>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 m-b-30">Articles</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                                               data-bgColor="#FFE6BA" value="<?php echo $articles['nbrArticles']%100 ?>"
                                               data-skin="tron" data-angleOffset="180" data-readOnly=true
                                               data-thickness=".15"/>
                                        </div>
                                        <div class="widget-detail-1">
                                            <h2 class="p-t-10 mb-0"> <?php echo $articles['nbrArticles']%100 ?> </h2>
                                            <p class="text-muted m-b-10">Vendus ce mois</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 m-b-30">Daily Sales</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2">
                                            <span class="badge badge-pink badge-pill pull-left m-t-20">32% <i class="mdi mdi-trending-up"></i> </span>
                                            <h2 class="mb-0"> 158 </h2>
                                            <p class="text-muted m-b-25">Revenue today</p>
                                        </div>
                                        <div class="progress progress-bar-pink-alt progress-sm mb-0">
                                            <div class="progress-bar progress-bar-pink" role="progressbar"
                                                 aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 77%;">
                                                <span class="sr-only">77% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-box" style="height: 350px; width: 600px;">
                                    <div class="dropdown pull-right" style="visibility: none;">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title mt-0">Notre Bestseller</h4>

                                    <div class="widget-chart text-center">
                                        <div style="height: 245px;"><img src="../mimosa/img/product/<?php echo $best['nom'] ?>" style="height: 245px; max-width: 500px;">
                                        </div>
                                        <ul class="list-inline chart-detail-list mb-0">
                                            <li class="list-inline-item">
                                                <h5 style="color:  #0d0d0d;">Nom du produit: <?php echo $best['produit_nom']; ?><br>Quantité vendue: <?php echo $result['qteTotal']; ?> paires</h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end col -->


                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="assets/images/users/avatar-3.jpg" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5">Chadengle</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <small class="text-warning"><b>Admin</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="assets/images/users/avatar-2.jpg" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5"> Michael Zenaty</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <small class="text-custom"><b>Support Lead</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="assets/images/users/avatar-1.jpg" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5">Stillnotdavid</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <small class="text-success"><b>Designer</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <img src="assets/images/users/avatar-10.jpg" class="img-responsive rounded-circle" alt="user">
                                        <div class="wid-u-info">
                                            <h5 class="mt-0 m-b-5">Tomaslau</h5>
                                            <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                                            <small class="text-info"><b>Developer</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 m-b-30">Inbox</h4>

                                    <div class="inbox-widget nicescroll" style="height: 315px;">
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Chadengle</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">13:40 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Tomaslau</p>
                                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                                <p class="inbox-item-date">13:34 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Stillnotdavid</p>
                                                <p class="inbox-item-text">This theme is awesome!</p>
                                                <p class="inbox-item-date">13:17 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Kurafire</p>
                                                <p class="inbox-item-text">Nice to meet you</p>
                                                <p class="inbox-item-date">12:20 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Shahedk</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">10:15 AM</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-8">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 m-b-30">Latest Projects</h4>

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Project Name</th>
                                                <th>Start Date</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                                <th>Assign</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Adminto Admin v1</td>
                                                    <td>01/01/2017</td>
                                                    <td>26/04/2017</td>
                                                    <td><span class="badge badge-danger">Released</span></td>
                                                    <td>Coderthemes</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Adminto Frontend v1</td>
                                                    <td>01/01/2017</td>
                                                    <td>26/04/2017</td>
                                                    <td><span class="badge badge-success">Released</span></td>
                                                    <td>Adminto admin</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Adminto Admin v1.1</td>
                                                    <td>01/05/2017</td>
                                                    <td>10/05/2017</td>
                                                    <td><span class="badge badge-pink">Pending</span></td>
                                                    <td>Coderthemes</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Adminto Frontend v1.1</td>
                                                    <td>01/01/2017</td>
                                                    <td>31/05/2017</td>
                                                    <td><span class="badge badge-purple">Work in Progress</span>
                                                    </td>
                                                    <td>Adminto admin</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Adminto Admin v1.3</td>
                                                    <td>01/01/2017</td>
                                                    <td>31/05/2017</td>
                                                    <td><span class="badge badge-warning">Coming soon</span></td>
                                                    <td>Coderthemes</td>
                                                </tr>

                                                <tr>
                                                    <td>6</td>
                                                    <td>Adminto Admin v1.3</td>
                                                    <td>01/01/2017</td>
                                                    <td>31/05/2017</td>
                                                    <td><span class="badge badge-primary">Coming soon</span></td>
                                                    <td>Adminto admin</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

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

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!--Morris Chart-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script src="assets/js/notification.js"></script>

    </body>
</html>