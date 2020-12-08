<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>YANA</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo.png" rel="icon">
  <link href="../assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/../assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v2.0.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">yana.tn@esprit.tn</a>
        <i class="icofont-phone"></i> +216 94 366 666
        <i class="icofont-google-map"></i> tunis , araiana essoghra technopole ghazela
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">YANA</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="active"><a href="../index.html">Home</a></li>
            <li><a href="developement_p.html">Development Personelle</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="forum.php">Blog</a></li>
            <li><a href="#doctors">Doctors</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>FORUM YANA </h1>
      <h2>Espace de discussion publique pour toute questions</h2>
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
									<div class="next-prev-area">
										<a href="<?php  if($id-1<$min1) {$id=$min1; echo  "forum-detail.php?id=".$id=$id;} else echo "forum-detail.php?id=".$id=$id-1;  ?>" class="next"><i class="fa fa-angle-left"></i>prev post</a>
										<a href="<?php echo "forum-detail.php?id=".$id=$id+1; if($max1<$id) $id=$max1;?>" class="previews">next post<i class="fa fa-angle-right"></i></a>
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
											<img src="img/blog/profil.png" alt="man" />
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
												<a href="#"><img src="<?php echo $row['image']; ?>" alt="post" /></a>
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
			<!-- ======= Footer ======= -->
			<footer id="footer">

<div class="footer-top">
  <div class="container">
	<div class="row">

	  <div class="col-lg-3 col-md-6 footer-contact">
		<h3>YANA</h3>
		<p>
		  ESPRIT <br>
		  Ariana sghira, 2080<br>
		  Tunisia <br><br>
		  <strong>Phone:</strong> +216 94 366 666<br>
		  <strong>Email:</strong> yana.tn@esprit.tn<br>
		</p>
	  </div>

	  <div class="col-lg-2 col-md-6 footer-links">
		<h4>Useful Links</h4>
		<ul>
		<li><i class="bx bx-chevron-right"></i> <a href="../index.html">Home</a></li>
		<li><i class="bx bx-chevron-right"></i> <a href="developement_p.html">Development Personelle</a></li>
		<li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
		<li><i class="bx bx-chevron-right"></i> <a href="forum.php">Blog</a></li>
		<li><i class="bx bx-chevron-right"></i> <a href="#doctors">Doctors</a></li>
		<li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
	  </ul>
	  </div>

	  <div class="col-lg-4 col-md-6 footer-newsletter">
		<h4>Join Our Newsletter</h4>
		<p>Pour recevoir toutes les noveautes medicales</p>
		<form action="" method="post">
		  <input type="email" name="email"><input type="submit" value="Subscribe">
		</form>
	  </div>

	</div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="mr-md-auto text-center text-md-left">
	<div class="copyright">
	  &copy; Copyright <strong><span>YANA</span></strong>. All Rights Reserved
	</div>
	<div class="credits">
	  <!-- All the links in the footer should remain intact. -->
	  <!-- You can delete the links only if you purchased the pro version. -->
	  <!-- Licensing information: https://bootstrapmade.com/license/ -->
	  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
	</div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
	<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
	<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
	<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
	<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
	<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/venobox/venobox.min.js"></script>
<script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="../assets/vendor/counterup/counterup.min.js"></script>
<script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</body>

</html>