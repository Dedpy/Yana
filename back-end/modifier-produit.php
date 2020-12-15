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

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
        <script type="text/javascript">
                            
                            /*function verif_alphaNum($str){
                                        preg_match("/([^A-Za-z0-9])/",$str,$result);
                                    //On cherche tt les caractères autre que [A-Za-z] ou [0-9]
                                        if(!empty($result)){
                                        //si on trouve des caractère autre que A-Za-z ou 0-9
                                        alert("erreur");
                                            return false;
                                        }
                                        return true;
                                    }*/
                                    function verif()
                                    {
                                    var verif=0;
                                        /*if(parseInt(window.document.produit.prix.value)!=(window.document.produit.prix.value))
                                            {

                                         document.produit.prix.style.borderColor="red";
                                                verif=1;
                                            }
                                    else
                                    {

                                         document.produit.prix.style.borderColor="#e5e5e5";
                                        
                                    }*/

                                    if(parseInt(window.document.produit.quantite.value)!=(window.document.produit.quantite.value))
                                    {

                                        document.produit.quantite.style.borderColor="red";
                                        verif=1;
                                    }
                                    else 
                                    {
                                        
                                        document.produit.quantite.style.borderColor="#e5e5e5";
                                        
                                    }
                                    if(window.document.produit.idproduit.value.length==0)
                                    {
                                        document.produit.idproduit.style.borderColor="red";
                                        verif=1;
                                    }
                                    else 
                                    {
                                        document.produit.idproduit.style.borderColor="#e5e5e5";
                                        
                                    }
                                    if(window.document.produit.marque.value.length==0)
                                    {
                                        document.produit.marque.style.borderColor="red";
                                        verif=1;
                                    }

                                    else 
                                    {
                                        document.produit.marque.style.borderColor="#e5e5e5";
                                        
                                    }
                                    if(window.document.produit.description.value.length==0)
                                    {
                                        document.produit.description.style.borderColor="red";
                                        verif=1;
                                    }
                                    else 
                                    {
                                        document.produit.description.style.borderColor="#e5e5e5";
                                        
                                    }
                                    if(window.document.produit.couleur.value.length==0)
                                    {
                                        document.produit.couleur.style.borderColor="red";
                                        verif=1;
                                    }
                                    else 
                                    {
                                        document.produit.couleur.style.borderColor="#e5e5e5";
                                        
                                    }
                                    if(window.document.produit.nom.value.length==0)
                                    {
                                        document.produit.nom.style.borderColor="red";
                                        verif=1;
                                    }
                                    else 
                                    {
                                        document.produit.nom.style.borderColor="#e5e5e5";
                                        
                                    }
                                    if(verif==1)
                                    {
                                        return false;
                                    }
                                    else
                                        {
                                            return true;
                                        }
                   
                
                                    
                                    }
                        </script>


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
            <?php include_once 'left-bar.php'; ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
              <form action="modifiercheck.php" enctype="multipart/form-data" method="POST" name="produitM" onsubmit="return verif(this)">
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Modifier un Produit</b></h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                               
                                                    <?PHP

                                                            require '../core/produitC.php';
                                                            
                                                            $pr=new ProduitManage();
                                                            $result=$pr->recupererProduit($_GET['id']);
                                                        foreach($result as $row){
                                                            $id=$row['produit_id'];
                                                            $description=$row['produit_description'];
                                                            $prix=$row['produit_prix'];
                                                            $quantite=$row['produit_qte'];
                                                            $nom=$row['produit_nom'];
                                                            $categorie=$row['produit_categorie'];
                                                            $marque=$row['produit_marque'];
                                                            $forme=$row['produit_forme'];
                                                            $couleur=$row['produit_couleur'];

                                                            
                                                    ?>
                                                     <tr>

                                                        <div class="form-group row">
                                                        <td><label class="col-2 col-form-label">ID</label></td>
                                                        <td><div class="col-5">
                                                            <input type="text" class="form-control" value="<?php echo $id?>"
                                                            name="idproduitM" disabled>
                                                            <input type="hidden" class="form-control" value="<?php echo $id?>"
                                                            name="idproduitM">
                                                        </div></td>

                                                    </div>
                                                    </tr>
                                                   <tr>
                                                     <div class="form-group row">
                                                        <td><label class="col-2 col-form-label">Marque</label></td>
                                                        <td><div class="col-5">
                                                            <input type="text" class="form-control" value="<?php echo $marque ?>" 
                                                            name="marqueM">
                                                        </div></td>
                                                        </div>
                                                        </tr>
                                                        <tr>
                                                    <div class="form-group row">
                                                       <td> <label class="col-2 col-form-label">Categorie</label></td>
                                                        
                                                            <td>
                                                                <div class="col-5">
                                                                <select name="categorieM" size="1" style="width:400px">
                                                              <option name="optique" value="optique">Optique</option>
                                                              <option name="solaire" value="solaire">Solaire</option>
                                                            </select>
                                                        </div></td>
                                                       
                                                        </div>
                                                        </tr>
                                                        <tr>
                                                        <div class="form-group row">
                                                        <td><label class="col-2 col-form-label">Nom</label></td>
                                                        <td><div class="col-5">
                                                            <input type="text" class="form-control" value="<?php echo $nom ?>"
                                                            name="nomM">
                                                        </div></td>

                                                    </div>
                                                    </tr>

                                                    <tr>
                                                    <div class="form-group row">
                                                        <td><label class="col-2 col-form-label">Description</label></td>
                                                        
                                                       <td>
                                                        <div class="col-5">
                                                        <textarea rows="4" cols="54" name="descriptionM"><?php echo $description ?></textarea>
                                                        
                                                       </div>
                                                        </td>

                                                    </div>
                                                    </tr>
                                                    <tr>
                                                    <div class="form-group row">
                                                        <td><label class="col-2 col-form-label">Forme</label></td>
                                                        <td><div class="col-5">
                                                        <select name="formeM" size="1" style="width:400px">
                                                              <option name="rectangulaire" value="rectangulaire">Rectangulaire</option>
                                                              <option name="carré" value="carré">Carré</option>
                                                               <option name="Ronde/Ovale" value="Ronde/Ovale">Ronde/Ovale</option>
                                                               <option name="Aviateur" value="Aviateur">Aviateur</option>
                                                               <option name="Classique" value="Classique">Classique</option>

                                                               <option name="Cat Eyes" value="Cat Eyes">Cat Eyes</option>

                                                               <option name="Papillon" value="Papillon">Papillon</option>
                                                            </select>
                                                        </div></td>

                                                    </div>
                                                    </tr>
                                                    <tr>
                                                    <div class="form-group row">
                                                        <td><label class="col-2 col-form-label">Couleur</label></td>
                                                        <td><div class="col-5">
                                                            <input type="text" class="form-control" value="<?php echo $couleur ?>"
                                                            name="couleurM">
                                                        </div></td>

                                                    </div>
                                                    </tr>
                                                    <tr>
                                                    <div class="form-group row">
                                                      <td><label class="col-2 col-form-label">Prix</label></td>
                                                        <td><div class="col-5">
                                                            <input type="text" class="form-control" value="<?php echo $prix ?>"
                                                            name="prixM">
                                                        </div></td>
                                                    </div>
                                                    </tr>
                                                    <tr>
                                                    <div class="form-group row">
                                                        <td><label class="col-2 col-form-label">Quantite</label></td>
                                                       <td> <div class="col-5">
                                                            <input type="text" class="form-control" value="<?php echo $quantite ?>"
                                                            name="quantiteM">
                                                        </div></td>
                                                    </div>
                                            
                                                    </tr>
                                                    <?php 
                                                        include_once '../core/imageC.php';  
                                                                $ph=new ImagesManage();
                                                                $tt=$ph->afficherImage($id);
                                                            ?>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Images du produit</label>
                                                        <div class="col-1">
                                                                <?php 
                                                                foreach ($tt as $aa) { ?>
                                                                    
                                                                <img src="<?php echo  "../mimosa/img/product/".$aa['nom'] ?>" width="100" height="100" alt="product" class="primary"/>
                                                                <?php echo $aa['nom'] ?>
                                                                <input type="hidden" name="nomIm" value="<?php echo $aa['nom'] ?>">
                                                                
                                                              <?php   } ?>
                                                        </div>
                                                    </div>  
                                                    <tr>
                                                    <div class="form-group row">
                                                        <td><label class="col-2 col-form-label">Image(principal)</label></td>

                                                        <td><div class="col-5">
                                                            <input size=50 type="file" class="form-control"
                                                            name="imageM">
                                                            <div class="col-5">
                                                            
                                                        </div>

                                                        </div></td>
                                                    </div>
                                                    </tr>
                                                    <tr>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Image(secondaire1)</label>

                                                        <div class="col-5">
                                                            <input size=50 type="file" class="form-control"
                                                            name="image2M">
                                                            <div class="col-5">

                                                        </div>
                                                        </div>
                                                    </div>
                                                    </tr>
                                                    <tr>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Image(secondaire2)</label>

                                                        <div class="col-5">
                                                            <input size=50 type="file" class="form-control"
                                                            name="image3M">
                                                            <div class="col-5">
                                                            
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </tr>
                                                     
                                                    <p align="center">
                                                        <br>
                                                    <button type="submit" name="valider" class="btn btn-primary">Valider</button>
                                                    <?php } ?>
                                                
                                           
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 - 2018 © Adminto. Coderthemes.com
                </footer>

            </div>
            </form>


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
        

    </body>
</html>