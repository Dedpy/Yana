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
  <link href="../assets/img/logo.png" rel="icon">
  <link href="../assets/img/logo.png" rel="apple-touch-icon">

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
  <link href="../assets/css/style1.css" rel="stylesheet">

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
    <a href="modifierPatient.php?id=<?PHP echo $_SESSION['id']; ?>" class="appointment-btn scrollto"> Modifier </a>
    <a href="logout.php" class="appointment-btn scrollto">Déconnexion</a>
</div>
    <div class="container d-flex align-items-center">
    <h1 class="logo mr-auto"><img src="../assets/img/logo.png" alt="" class="img-fluid"><a href="../index.php">YANA</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="home.php" class="logo mr-auto"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.php">Home</a></li>
          <li><a href="forum.php">Blog</a></li>
          <li><a href="mesconsultations.php">Mes consultations</a></li>
          <li><a href="../develo-per.php">Developement Personelles</a></li>
          <li><a href="../index.php#appointment">Planifier un RDV</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <section></section>
  <section></section>
			
  
			<div class="shop-main-area">
				<!-- cart-main-area-start -->
				<div class="cart-main-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-10">
								<div class="contact-form">
									<h3><i class="fa fa-envelope-o"></i>Poster</h3>
									<form name="formulaire" action="ajouter-post.php" onsubmit="verif()" method="POST">
									<div class="row">
										<div class="col-lg-12">
												<div class="checkout-form-list">
													<input type="text"  name="titre" id="titre"  placeholder="Titre" />
													<input name="id_client"  type="hidden" value="<?php echo $_SESSION['id']; ?>" />
											</div>
										</div>
										
									<div class="col-lg-12 ">
											<div class="country-select">
												
												<select name="categorie" id="categorie" class="chosen-select" tabindex="1" style="width:100%;" data-placeholder="Default Sorting">
													<option >Selectioner Une Categorie</option>
													<option value="Depression">Depression</option>
													<option value="Maladie mentale">Maladie mentale</option>
													<option value="Developement personnel">Developement personnel</option>

												</select>
											</div>

									</div>
									
									<div class="col-lg-12 ">
											<div class="checkout-form-list">
										
											<textarea  cols="130" rows="4"  name="msg" placeholder="Post"></textarea>
									</div>
									</div>	
									</div>
									<div class="single-register">
											<input class="confirmer" type="submit" value="Poster">
									</div>
									</form>
								</div>	
							</div>
						</div>
					</div>
				</div>
				<!-- cart-main-area-end -->
			</div>
			</div>
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
		<li><i class="bx bx-chevron-right"></i> <a href="../home.php">Home</a></li>
		<li><i class="bx bx-chevron-right"></i> <a href="developement_p.html">Development Personelle</a></li>
		<li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
		<li><i class="bx bx-chevron-right"></i> <a href="forum.php">Blog</a></li>
		<li><i class="bx bx-chevron-right"></i> <a href="#doctors">Doctors</a></li>
		<li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
	  </ul>
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
<script src="../assets/js/script.js"></script>

</body>

</html>