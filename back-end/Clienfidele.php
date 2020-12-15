 <?php  include 'session.php'; ?>
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
                                <h4 class="page-title">Gestion de la fidélité client</h4>
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
          
          <?php  include 'left-bar.php'; ?>

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

                    <?php

                      require '../core/clientfideleC.php'; 
                      $client = new clientfideleC();

                    ?>
 


                 <form method="post" action="ajouterClientfidele.php">

                      <br>
                      <h4 class="m-t-0 header-title"><b> Ajouter un client fidèle </b></h4> 
                      <br>

                          <div class="form-group col-md-4">
                          <label for="inputState" class="col-form-label">Clients qui ont passé des commandes </label>

                      <?php 
                                    
                        $bdd=config::getConnexion();
                        $q=$bdd->prepare("SELECT DISTINCT(id_client),p.nom ,p.prenom FROM client p , commande p1 where p.id=p1.id_client");
                        $q->execute();
                        $listeClient=$q->fetchAll();
                       ?>

                              <select required name="fidele" class="form-control">
                                      
                                      <option value=""> --Selectionner un client--</option>

                                        <?PHP
                                    foreach($listeClient as $row){
                                        ?>
                                        <option  value="<?PHP echo $row['id_client']; ?>"> <?PHP echo $row['nom'] ,'-',$row['prenom'],'-',$row['id_client'] ; ?>
                                        </option>
                                        <?PHP } ?>
                              </select>

                            </div>


                             <div>
                                <p align="center">
                               <button type="submit" class="btn btn-purple btn-bordred waves-effect w-md waves-light m-b-5"> Ajouter</button>
                             </div>
                       
                 </form>
                              


                                                     
                            
                         

                   <hr>

                      <br>  
                      <h4 class="m-t-0 header-title"><b> Liste de clients fidèles </b></h4>

            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">

                                        <thead>
                                        <tr>
                                            <th>ID Client</th>
                                            <th>Code de promotion</th>
                                            <th>Somme de commandes passées</th>
                                            <th>nombre de commandes passées</th>
                                            <th>pourcentage</th>
                                            <th>Validité</th>
                                           

                                        </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                    $liste=$client->afficherClientfidele();
                                    foreach ($liste as $val) 
                                    {?>
                                        <tr>
                                            
                                            <td> <?php echo $val['id_client']?> </td>
                                            <td> <?php echo $val['codePromo']?> </td>
                                            <td> <?php echo $val['sum']?> DT </td>
                                            <td> <?php echo $val['count']?> </td>
                                            <td> <?php echo $val['pourcentage']?> </td>
                                            <td> <?php echo $val['validite']?> </td>


                                               <td>

                                                <form method="POST" action="couponMail.php">

                                                 <button  type="submit"  class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class="fa fa-envelope-o m-r-5"></i> <span> Envoyer</span> </button>

                                                 <input type="hidden" name="id_client" value="<?php echo $val['id_client']?>">

                                                 <input type="hidden" name="codePromo"   value="<?php echo $val['codePromo']?>">


                                               </form>
                                             </td>




                                            <td>

                                            <form method="POST" action="supprimerClientfidele.php">
                                                <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5" name="supp"> <i class="fa fa-remove"></i> </button>

                                                <input type="hidden" value="<?PHP echo $val['id_client']; ?>" name="clientfidele">
                                            </form>

                                             </td>





                                       
                                        </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>


                              </div>
                            </div>
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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script src="assets/js/notification.js"></script>

    </body>
</html>