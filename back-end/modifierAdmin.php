
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
                                <h4 class="page-title">Admin</h4>
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
            <?php include 'left-bar.php' ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->

                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Modifier un admin</b></h4>
                                    

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">

                                       <?php
                include "../Core/AdminM.php";
                $AdminManage=new AdminManage();
$result=$AdminManage->recupererAdmin($_GET['id']);
foreach($result as $row)
{

                ?>

                                                <form class="form-horizontal" role="form" action="modifier-admin.php" method="POST">
                                                	<div class="form-group row">
                                                     
                                                        <div class="col-10">
                                                            <input type="hidden" class="form-control" name="id"  value="<?php echo $row['id']; ?>">
                                                        </div>
                                                    </div>
                                                   <div class="form-group row">
                                                        <label class="col-2 col-form-label" for="example-email">Nom</label>
                                                        <div class="col-10">
                                                            <input type="text" id="nom" name="nom" class="form-control" value="<?php echo $row['nom']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Prenom</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="prenom" value="<?php echo $row['prenom']; ?>">
                                                        </div>
                                                    </div>
                                                      <div class="form-group row">
                                                        <label class="col-2 col-form-label">Pseudo</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="pseudo" value="<?PHP echo $row['pseudo']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">E-mail</label>
                                                        <div class="col-10">
                                                            <input type="email" class="form-control" name="email" value="<?PHP echo $row['email']; ?>">
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <label class="col-2 col-form-label">Mot de passe</label>
                                                        <div class="col-10">
                                                            <input type="password" class="form-control" name="MotDePasse" value="<?PHP echo $row['MotDePasse']?>">
                                                        </div>
                                                    </div>
                                                   
                                                


                                                    
                                                        
                                                   
                        <!-- end row -->


                     
                                                <?php	}
												?>
                                                 <div class="form-group mb-0 justify-content-end row">
                                            <div class="col-9">
                                                <button type="submit" name="modif" value="Modifier" class="btn btn-info waves-effect waves-light">Modifier</button>
                                            </div>
                                        </div>

                                    </form>
                                    
                               
                                </div>
                            </div>

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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script src="assets/js/notification.js"></script>



</body>
</html>