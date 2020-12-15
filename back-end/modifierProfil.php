<?php include 'session.php' ?>
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
                                <h4 class="page-title">Form Validation</h4>
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
                        <?php 
                            include_once '../core/AdminM.php';
                            $admin=new AdminManage();
                            $list=$admin->recupererAdmin($_SESSION['id_admin']);
                            $result=$list->fetch();
                        ?>


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0 m-b-30">Basic Form</h4>

                                    <form action="modifier-admin.php" method="POST" data-parsley-validate novalidate>
                                        <div class="form-group">
                                            <label for="userName">User Name*</label>
                                            <input type="text" parsley-trigger="change" required
                                                   placeholder="Enter user name" class="form-control" id="userName" name="pseudo" value="<?php echo $result['pseudo'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">Nom</label>
                                            <input type="text" parsley-trigger="change" required
                                                   placeholder="Enter user name" class="form-control" id="nom" name="nom" value="<?php echo $result['nom'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">Prenom</label>
                                            <input type="text" parsley-trigger="change" required
                                                   placeholder="Enter user name" class="form-control" id="prenom" name="prenom" value="<?php echo $result['prenom'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Email address*</label>
                                            <input type="email" name="email" parsley-trigger="change" required
                                                   placeholder="Enter email" class="form-control" id="emailAddress" name="email" value="<?php echo $result['email'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pass1">Password*</label>
                                            <input id="pass1" placeholder="Password" required
                                                   class="form-control" name="MotDePasse" value="<?php echo $result['MotDePasse'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="passWord2">Confirm Password *</label>
                                            <input data-parsley-equalto="#pass1" type="password" required
                                                   placeholder="Password" class="form-control" id="passWord2" name="MotDePasse" value="<?php echo $result['MotDePasse'] ?>">
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $_SESSION['id_admin'] ?>">
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect waves-light m-l-5">
                                                Cancel
                                            </button>
                                        </div>

                                    </form>
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

        <!-- Validation js (Parsleyjs) -->
        <script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script src="assets/js/notification.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>


    </body>
</html>