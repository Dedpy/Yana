<?php //session_start();
    if (!isset($_SESSION['id_admin']))
    {
       echo "<meta http-equiv='refresh' content='0;url=login-admin.php'>";
    }
?>
<div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="https://png.icons8.com/color/260/user-male-circle.png" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="mdi mdi-adjust"></i></div>
                        </div>
                        <h5><a href="#">Admin</a> </h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="modifierProfil.php" >
                                    <i class="mdi mdi-settings"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="logout.php" class="text-custom">
                                    <i class="mdi mdi-power" href="logout.php"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Navigation</li>

                            <li>
                                <a href="index.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>
                            <?php if($_SESSION['type']== "superuser")  
                            {

                               ?>
                            <?php if ($_SESSION['type']=="superuser"){ ?>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-donut-variant"></i><span> Gestion des admins </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ajout-admin.php">Ajouter un admin</a></li>
                                    <li><a href="affichage-admin-back.php">Mes admins</a></li>
                                    
                                </ul>
                            </li>
                            <?php } ?>
                            <li class="has_sub">
                                <a href="affichage-clients-back.php" class="waves-effect"><i class="mdi mdi-chart-donut-variant"></i><span> Gestion des clients</span> <span class="menu-arrow"></span></a>
                                
                            </li>


                            <?php } ?>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-donut-variant"></i><span> Gestion des produits </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ajout-produit.php">Ajouter un produit</a></li>
                                    <li><a href="affichage-produit.php">Liste des produits</a></li>
                                    
                                </ul>
                            </li>
                              <li>
                                <a href="afficherCommandes.php" class="waves-effect"><i class="mdi mdi-calendar"></i><span> Gestion des commandes </span></a>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Gestion des livraisons </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="afficher-livraison.php">afficher les livraisons</a></li>
                                    <li><a href="ajouterPosition.php">ajouter une position</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Gestion des Promotions</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="AjouterPromotion1.php">Ajouter Promotion</a></li>
                                    <li><a href="ListeDesPromotions.php">Liste Des Promotions</a></li>
                             

                                    
                             </ul>
                         </li>
                          <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Gestion des Offres</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                   
                                    <li><a href="AjouterOffre.php">Ajouter Offre</a></li>
                                    <li><a href="ListeDesOffres.php">Liste Des Offres</a></li>
                                    <li><a href="clienfidele.php">Client Fidèle</a></li>

                                    
                             </ul>
                         </li>
                          <li>
                                <a href="contact-inbox.php" class="waves-effect"><i class="mdi mdi-email"></i><span class="badge badge-purple pull-right">New</span><span> Mail </span></a>
                            </li>

                             <li>
                              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span> Newsletter</span> <span class="menu-arrow"></span></a>
                                    
                                <ul class="list-unstyled">
                                    <li><a href="newsletterClient.php">Newsletter pour Clients</a></li>
                                    <li><a href="newsletterSubscribe.php">Newsletter pour Subscribers</a></li>



                                </ul>
                            </li>

                           <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Gestion des Reclamation </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="afficher-reclamation.php">Afficher les Reclamation</a></li>
                                   
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Statistiques </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="chart-flot.php">Visiteur</a></li>
                                    <li><a href="chart-flot1.php">Client</a></li>
                                    <li><a href="chart-flot2.php">Produit</a></li>
                                
                                </ul>
                            </li>
                          
                              <li>
                                <a href="calendrier.php" class="waves-effect"><i class="mdi mdi-calendar"></i><span>  Calendrier </span></a>
                            </li>
                             <li>
                                <a href="/code/light/livechat/php/app.php?admin" class="waves-effect"><i class="mdi mdi-calendar"></i><span>  Chat </span></a>
                            </li>
                           
                           

                        

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>Extra Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="extras-projects.html">Projects</a></li>
                                    <li><a href="extras-tour.html">Tour</a></li>
                                    <li><a href="extras-taskboard.html">Taskboard</a></li>
                                    <li><a href="extras-taskdetail.html">Task Detail</a></li>
                                    <li><a href="extras-profile.html">Profile</a></li>
                                    <li><a href="extras-maps.html">Maps</a></li>
                                    <li><a href="extras-contact.html">Contact list</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-faq.html">FAQ</a></li>
                                    <li><a href="extras-gallery.html">Gallery</a></li>
                                    <li><a href="extras-email-template.html">Email template</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-comingsoon.html">Coming soon</a></li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>