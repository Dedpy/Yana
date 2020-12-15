<?php include_once 'session.php'; ?>
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
                                <h4 class="page-title">Livraison</h4>
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
         <?php include_once 'left-bar.php';?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        
                <?php 
                require_once '../core/livraisonC.php';

                $livre=new LivraisonManage();

                $liste=$livre->afficher_livraisons();
                ?>

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Liste des livraisons</b></h4>
                                    

                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>ID Client</th>
                                            <th>ID commande</th>
                                            <th>Date Livraison</th>
                                            <th>Statut</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                                    <?php 
                                                    foreach ($liste as $row) {
                                                        
                                                    $date=date("Y-m-dH:i",strtotime($row['date_livraison']));
                                                    $date1=substr($date,0,10)."T".substr($date,10);
                                                    ?>
                                                    <tr>
                                                       <form method="post" action="enregistrer-livraison.php">
                                                        <td><?php echo $row['id_client'] ?></td>
                                                        <td><?php echo $row['id_commande'] ?></td>
                                                        <td><input type="datetime-local" name='date_livraison' value="<?php echo $date1 ?>" ></input></td>
                                                        <td><select name='statut' >
                                                            <option value='<?php echo $row['statut'] ?>'><?php echo $row['statut'] ?></option>
                                                            <?php if($row['statut']=="en attente")
                                                                    $selectop="livree";
                                                                    else
                                                                    $selectop="en attente";
                                                                    ?>

                                                            <option value='<?php echo $selectop ?>'><?php echo $selectop ?></option>
                                                        </select></td>
                                                        <input type="hidden" name="id_commande" value="<?php echo $row['id_commande'] ?>">
                                                        <input type="hidden" name="id_client" value="<?php echo $row['id_client'] ?>">
                                                        <td>
                                                              <?php /* <form method="post" action="supprimer-livraison.php"> */?>
                                                                <p align="center">
                                                                    <a href="supprimer-livraison.php?id_commande=<?php echo $row['id_commande'] ?>" class="btn btn-danger btn-rounded w-md waves-effect waves-light m-b-5">Supprimer</a></p>
                                                            
                                                          <p align="center"><button type='submit' name='' value="enregistrer" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5"  >Enregistrer </button></p></td></form>
                                                          <form method="post" action="http://laptops.topic.ca/back/projet/light/envoyer-mail.php">
                                                          <td><p align="center">
                                                            
                                                                <input type="hidden" name="destination" value="<?php echo $row['email'] ?>">
                                                                <input type="hidden" name="objet" value="Livraison">
                                                                <input type="hidden" name="link" value="http://localhost/code/light/afficher-livraison.php" >
                                                                <input type="hidden" name="contenu" value="votre livraison sera livré le <?php echo $row['date_livraison'] ?>">
                                                                    <button type='submit'  class="btn btn-inverse waves-effect waves-light m-b-5">email</button></p> 
                                                                    </form>
                                                                    <form method="post" action="sms2.php">
                                                          <p align="center">
                                                            
                                                                <input type="hidden" name="id_commande" value="<?php echo $row['id_commande'] ?>">
                                                                    <button type='submit'  class="btn btn-inverse waves-effect waves-light m-b-5">SMS</button></p> </td>
                                                                    </form>

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

        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script src="assets/js/notification.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>


    </body>
</html>