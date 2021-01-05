<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="../dist/index.php">BACK END YANA</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    
                        <a class="dropdown-item" href="../views/logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="../dist/index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link" href="../dist/specialites.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Spécialités
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                           
                            
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="../views/forum.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Blog
                            </a>
                            <a class="nav-link" href="../dist/enregistrements.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Les enregistrements des RDV
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                               
                                Tables
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../views/afficherPatient.php">Table Patients</a>
                                    <a class="nav-link" href="../views/afficherMedecin.php">Tables Medecins</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        YANA admin groupe 3
                    </div>
                </nav>
            </div>
			<div id="layoutSidenav_content">
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <a href="post.php" class="btn-get-started scrollto">Poser une questions</a>
    </div>
  </section><!-- End Hero -->
  <section></section>  <section></section>
			<!-- shop-main-area-start -->
			<div class="shop-main-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<!-- blog-details-area-start -->
							<div class="blog-details-area mb-40-2">
									<?php 
											include_once '../controller/ForumM.php';
											/*include "../Utilisateur/ClientC.php";
											$ClientManage=new ClientManage();
											$cli=$ClientManage->recupererClient($_SESSION['id']);*/
											$post=new ForumManage();
							    			$result=$post->recupererPost($_GET['id']);
							    			$posts=$post->afficherPost();
							    			$max=$post->maxPost();
							    			$min=$post->minPost();
											$coment=$post->recupererCommentaire($_GET['id']);
											$number_of_rows = $coment->rowCount(); 
											/*foreach ($cli as $val1) {
											$nom=$val1['nom'];
											}*///pour afficher l'utilisateur 
											foreach ($max as $val1) {
											$max1=$val1['max_post'];
											}
											foreach ($min as $val1) {
											$min1=$val1['min_post'];
											}
											foreach ($result as $val) {?>
								<h3><a href="#"><?php echo $val['categorie'];?></a></h3>
								<div class="blog-info">
									<h3><a href="#"><?php echo $val['titre'];?></a></h3>
									<p><?php echo $val['post'];?>
									<br />
									
									
									
									<div class="user-info">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="cats-tags-wrap mb-3">
													<i class="fa fa-list-alt"></i>Categorys: <a href="#"><?php echo $val['categorie'];?></a>
												</div>
											</div>
											<?php } $id=$_GET['id'];?>	
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="user-share">
													
													<ul>
														<li><a href="supprimer-post.php?id=<?php echo $_GET['id']; ?>"><i>Supprimer</i></a></li>
														<li><a href="modifier-post.php?id=<?php echo $_GET['id']; ?>"><i>Modifier</i></a></li>
													</ul>
												</div>
											</div>		
										</div>
									</div>
									
								</div>
								<!-- comments-area-start -->
								<div class="comments-area mt-40">
									
									<?php 
									
									foreach ($coment as $val2) {
										?>
									<!-- single-comments-start -->
									<div class="single-comments single-comments-2">
										<div class="comment-img">
											<img src="img/blog/profil.png"  width="40" alt="man" />
										</div>
										<div class="comment-text">
											<a href="#"><?php echo $val2['nom']; ?></a>
											<?php 
											$timeadd=$val2['date_com'];
                                            $date1 = date('Y-m-d',strtotime($timeadd));
                                            $time1 = date('H:i',strtotime($timeadd));
                                            $date1 = explode('-', $date1);
                                            $year = $date1[0];
                                            $month   = $date1[1];
                                            $day  = $date1[2];
                                            $monthName = date("F", mktime(0, 0, 0, $month, 10));?>
											<span><?php echo $monthName." ".$day.", ".$year." at ".$time1; ?></span>
											<p><?php echo $val2['comment']; ?></p>
											

												<div class="user-share">
													
													<ul>
														<li><a href="supprimer-comment.php?id=<?php echo $val2['id']."&id_post=".$_GET['id']; ?>"><i>Supprimer</i></a></li>
														
													</ul>
												</div>
											
										</div>
									</div>
									<?php } ?>
									<!-- single-comments-end -->
								</div>
								<!-- comments-area-end -->
								<!-- comment-respond-area-start -->
								<div class="comment-respond-area mb-3">
									<h3>Entrez Votre Commentaire</h3>
									<div class="single-form">
										<form action="ajouter-commentaire.php" method="POST">
											<textarea name="comment" id="comment" cols="30" rows="10" placeholder="Entrez votre commentaire *"></textarea>
											<input name="id_client"  type="hidden" value="01" />
											<input name="id_post"  type="hidden" value="<?php echo $_GET['id']; ?>" />
											<input name="nom"  type="hidden" value="admin" />

									</div>
									
									<div class="single-register">
									<input type="submit" class="confirmer" value="Comment">
								</div>
									</form>
								</div>
								<!-- comment-respond-area-end -->
							</div>
							<!-- blog-details-area-end -->
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<!-- blog-right-area-start -->
							<div class="blog-right-area">
								<!-- blog-right-start -->
								<div class="blog-right mb-50 mb-3">
									<form action="#">
										<input type="text" placeholder="Search Here"/>
										<button type="submit"><i class="fa fa-search"></i></button>
									</form>
								</div>
								<!-- blog-right-end -->
								<!-- blog-right-start -->
								<div class="blog-right mb-50 mb-3">
									<h3>Publication Recente</h3>
									<div class="sidebar-post">
										
										
										<?php foreach ($posts as $row) {?>
										<!-- single-post-start -->
										<div class="single-post">
											<div class="post-img">
												<a href="#"><img width="40" src="<?php echo $row['image']; ?>" alt="post" /></a>
											</div>
											<div class="post-text">
												<h4><a href="#"><?php echo $row['titre']; ?></a></h4>
												<?php 
											$timeadd=$row['date_post'];
                                            $date1 = date('Y-m-d',strtotime($timeadd));
                                            $time1 = date('H:i',strtotime($timeadd));
                                            $date1 = explode('-', $date1);
                                            $year = $date1[0];
                                            $month   = $date1[1];
                                            $day  = $date1[2];
                                            $monthName = date("F", mktime(0, 0, 0, $month, 10));?>
											<span><?php echo $monthName." ".$day.", ".$year; ?></span>
												
											</div>

										</div>
										<?php } ?>
										<!-- single-post-end -->
									</div>
								</div>							
							</div>
							<!-- blog-right-area-end -->
						</div>
					</div>
				</div>
			</div>
			<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; YANA 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>