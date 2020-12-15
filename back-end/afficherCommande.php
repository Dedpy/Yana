<?php include_once "session.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Adminto - Responsive Admin Dashboard Template</title>

        <!-- Tablesaw css -->
        <link href="assets/plugins/tablesaw/dist/tablesaw.css" rel="stylesheet" type="text/css" />

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
                                <h4 class="page-title">Tablesaw</h4>
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
            <?php include_once "left-bar.php"; ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">

                                    <h4 class="m-t-0 header-title"><b>ID de la commande: <?php echo $_GET["id_commande"] ?></b></h4>

                                    <table class="tablesaw m-t-20 table m-b-0" data-tablesaw-mode="stack">
                                        <col width="40%">
                                        <col width="auto">
                                        <col width="auto">
                                        <col width="auto">
                                        <thead>
                                        <tr>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Produit</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Quantité</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Prix unitaire</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Prix</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?PHP
                                        include "../core/CommandeC.php";
                                        $comm=new CommandeC();
                                        $listeLigneCommande=$comm->afficherLigneCommande($_GET["id_commande"]);
                                        $total=0;
                                            foreach($listeLigneCommande as $row){
                                        ?>
                                        <tr>
                                            <td><?PHP echo $row['produit_nom']; ?></td>
                                            <td><?PHP echo $row['qte']; ?></td>
                                            <td><?PHP echo number_format($row['produit_prix'],3); ?></td>
                                            <td><?PHP echo number_format($row['produit_prix']*$row['qte'],3); ?></td>
                                        </tr>
                                        <?PHP
                                        $total+=$row['produit_prix']*$row['qte'];}
                                        ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><b>Montant total:</b></td>
                                            <td><b><?PHP echo number_format($total,3); ?></b></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <?php $listeInfo=$comm->afficherCommande($_GET["id_commande"]); 
                                        foreach($listeInfo as $row){ ?>
                                    <table>
                                        <tr>
                                            <th><h4>Nom: </h4></th>
                                            <td width="20px"></td>
                                            <td><h4><?php echo $row['nom']; ?></h4></td>
                                        </tr>
                                        <tr>
                                            <th><h4>Prenom: </h4></th>
                                            <td width="20px"></td>
                                            <td><h4><?php echo $row['prenom']; ?></h4></td>
                                        </tr>
                                        <tr>
                                            <th><h4>Adresse: </h4></th>
                                            <td width="20px"></td>
                                            <td><h4><?php echo $row['adresse'].$row['adresse2']; ?></h4></td>
                                        </tr>
                                        <tr>
                                            <th><h4>Ville: </h4></th>
                                            <td width="20px"></td>
                                            <td><h4><?php echo $row['ville']; ?></h4></td>
                                        </tr>
                                        <tr>
                                            <th width="200px"><h4>Code postal: </h4></th>
                                            <td width="20px"></td>
                                            <td><h4><?php echo $row['zip']; ?></h4></td>
                                        </tr>
                                        <tr>
                                            <th><h4>Méthode de paiement: </h4></th>
                                            <td width="20px"></td>
                                            <td><h4><?php echo $row['type']; ?></h4></td>
                                        </tr>
                                        <tr>
                                            <td width="20px" colspan="3" align="center"><a href="javascript:history.go(-1)" class="btn btn-custom btn-rounded waves-effect waves-light w-md m-b-5">Retour</a></td>
                                        </tr>
                                    <?php } ?>
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

        <!-- Tablesaw js -->
        <script src="assets/plugins/tablesaw/dist/tablesaw.js"></script>
        <script src="assets/plugins/tablesaw/dist/tablesaw-init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script src="assets/js/notification.js"></script>

    </body>
</html>