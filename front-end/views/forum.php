<?php
//include "../controller/patientC.php";
//require 'vendor/autoload.php';
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["id"])){
    var_dump($_SESSION);
		//header("Location: views/login.php");
		exit(); 
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>YANA </title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
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
  <h6>Bienvenue <?php echo $_SESSION['login']; ?>!</h6>
    <a href="../views/modifierPatient.php?id=<?PHP echo $_SESSION['id']; ?>" class="appointment-btn scrollto"> Modifier </a>
    <a href="../views/logout.php" class="appointment-btn scrollto">Déconnexion</a>
</div>
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="../index.php">YANA</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.php">Home</a></li>
          <li><a href="../views/forum.php">Blog</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#doctors">Doctors</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#contact">Planifier un RDV</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  <section></section>

  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>FORUM YANA </h1>
      <h2>Espace de discussion publique pour toute questions</h2>
      <a href="post.php" class="btn-get-started scrollto">Poser une questions</a>
    </div>
  </section><!-- End Hero -->
  <section></section>  <section></section>
			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<?php 
											include_once '../controller/ForumM.php';
											$post=new ForumManage();
							    			$posts=$post->afficherPost();
											?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- breadcrumbs-area-end -->
			<!-- shop-main-area-start -->
			<div class="shop-main-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<!-- blog-total-area-start -->
							<div class="blog-total-area mb-40-2">
								<div class="row">
									
									<?php foreach ($posts as $row) { ?>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<!-- single-blog-2-start -->
										<div class="single-blog single-blog-2 mb-30">
											<div class="blog-2-img">
												<a href="blog-details.html"><img width="40" src="<?php echo $row['image']; ?>" alt="man" /></a>
											</div>
											<div class="blog-2-content blog-content">
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
												<h3><a href="forum-detail.php?id=<?php echo$row['id']; ?>"><?php echo $row['titre']; ?></a></h3>
												
												<p><?php 
												$text=$row['post'];
												$text1=substr($text, 0, 200);
												echo $text1; ?></p>
												<a href="forum-detail.php?id=<?php echo $row['id']; ?>">Lire Plus ...</a>
											</div>
										</div>
										<!-- single-blog-2-end -->
									</div>
									<?php } ?>
								</div>
							</div>
							<!-- blog-total-area-end -->
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<!-- blog-right-area-start -->
							<div class="blog-right-area">
								<!-- blog-right-start -->
								<div class="blog-right mb-50 mb-3">
									<form action="recherche.php">
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
								<!-- blog-right-end -->
								<!-- blog-right-start -->
								<!-- blog-right-end -->
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
		<form  method="post" action="subscribe.php">
				<input  require type="email" name="subscribe" placeholder="Entrez votre adresse mail ici..."/>
				<button type="submit">S'abonner</button>
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
</footer>
<!-- End Footer -->
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