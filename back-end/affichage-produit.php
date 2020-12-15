<?php include 'session.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Adminto - Responsive Admin Dashboard Template</title>

        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>

<?php include_once 'left-bar.php';?>
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
                                <h4 class="page-title">Produits</h4>
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
                                    <form class="app-search" method="POST">
                                        <input type="text" placeholder="Search..."
                                               class="form-control" name="rechercher">
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
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Liste des produits</b></h4>
                                   
                                     <?php
                                     include_once '../core/produitC.php';

                                        $p=new ProduitManage();
                                        if(isset($_POST['rechercher']))
                                        {
                                            $list=$p->rechercherProduit($_POST['rechercher']);
                                        }
                                        else
                                        $list=$p->afficherProduit();

                                    ?>
                                    
                                    <table id="datatable-buttons" class="table table-striped table-bordered tableProd" cellspacing="0" width="100%">

                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Marque</th>
                                            <th>Categorie</th>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Forme</th>
                                            <th>Couleur</th>
                                            <th>Prix</th>
                                            <th>Quantite</th>
                                            <th>Date d'ajout</th>
                                            <th>Date de modification</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                    foreach ($list as $val) 
                                    {
                                        ?>
                                        <tr>
                                            
                                            <td class="id"> <?php echo $val['produit_id']?> </td>
                                            <td> <?php echo $val['produit_marque']?> </td>
                                            <td> <?php echo $val['produit_categorie']?> </td>
                                            <td class="nom"> <?php echo $val['produit_nom']?> </td>
                                            <td> <?php echo $val['produit_description']?> </td>
                                            <td> <?php echo $val['produit_forme']?> </td>
                                            <td> <?php echo $val['produit_couleur']?> </td>
                                            <td> <?php echo $val['produit_prix']?> </td>
                                            <td class="qte"> <?php echo $val['produit_qte']?> </td>
                                            <td> <?php echo $val['produit_date_ajout']?> </td>
                                            <td> <?php echo $val['produit_date_modification']?> </td>
                                            <td> <?php echo "<a href=modifier-produit.php?id=".$val['produit_id'].">"; ?>
                                                
                                       
                                                <button class="btn btn-icon waves-effect waves-light btn-warning m-b-5" name="modif"> <i class="fa fa-wrench"></i> </button>
                                            </td>

                                            <td> <?php echo "<a href=supprimer-produit.php?id=".$val['produit_id'].">"; ?>
                                            <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5" name="supp"> <i class="fa fa-remove"></i> </button></td>


                                       
                                        </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    
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
        <script src="assets/plugins/notifyjs/dist/notify-combined.js"></script>
        <script src="assets/js/notification.js"></script>
        <script src="assets/js/verifStock.js"></script>

       
       


    </body>
</html>