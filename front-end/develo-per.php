<?php
session_start();
$i=0;
if(isset($_SESSION['index'])) {$i=$_SESSION['index'];$i++;}
else {$i=1;}
$_SESSION['index']=$i;
	if(!isset($_SESSION["id"])){
    var_dump($_SESSION);
		header("Location: views/login.php");
		exit(); 
  }

  $bdd = new PDO('mysql:host=127.0.0.1;dbname=yana', 'root', '');
  try {
     $req= $bdd->prepare("SELECT * FROM typededev");
     $req->execute();
     $result = $req->fetchAll();
     }catch(PDOException $e) {echo '<h1>';echo $e->getMessage();echo '</h1>';}
     foreach ($result as $row) {       
if(isset($_POST[$row['id']])) {
if(!isset($_COOKIE[$row['id']])) {setcookie($row['id'],0,time()+365*24*3600,null,null,false,true);}
    else {setcookie($row['id'],$_COOKIE[$row['id']]+1,time()+365*24*3600,null,null,false,true);}
             }                     
        echo '</div>'; echo '</h3>';
   
   }  

?>
<html lang="en">
<head>
  <title>YANA </title>
  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style1.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">yana.tn@esprit.tn</a>
        <i class="icofont-phone"></i> +216 94 366 666
        <i class="icofont-google-map"></i> tunis , ariana essoghra technopole ghazela
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
    <a href="views/modifierPatient.php?id=<?PHP echo $_SESSION['id']; ?>" class="appointment-btn scrollto"> Modifier </a>
    <a href="views/logout.php" class="appointment-btn scrollto">Déconnexion</a>
</div>
<div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.html">YANA</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="views/forum.php">Blog</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="views/mesconsultations.php">Mes consultations</a></li>
          <li><a href="develo-per.php">Developement Personelles</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#appointment">Planifier un RDV</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
    <br> <br> <br><br><br>
    <h1>Développement Personnel</h1>
    <h2>Comment pouvons-nous apprendre à mieux vivre?</h2>
    <h2>Comment pouvons-nous éviter les difficultés?</h2>
    <h2>Comment augmenter notre bien-être?</h2>
    <h2>Comment améliorer nos relations avec les autres?</h2>
    </div>
  </section><!-- End Hero -->
  <br> <br> <br> <br> <br> <br> <br>

    
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
      <h1>Citations du jour</h1>
        <div class="owl-carousel testimonials-carousel">
<?php 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=yana', 'root', '');
try {
$req= $bdd->prepare("SELECT * FROM quotes");
  $req->execute();
  $result = $req->fetchAll();
  }catch(PDOException $e) {echo '<h1>';echo $e->getMessage();echo '</h1>';}
  foreach ($result as $row) {
      echo '
      <div class="testimonial-wrap">
      <div class="testimonial-item">
        <h3>'.$row['auteur'].'</h3>
        <h4>Auteur &amp; Founder</h4>
        <p>
          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
          '.$row['text'].'.
          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
        </p>
      </div>
    </div>
      ';
  }
?>


        </div>

      </div>
    </section><!-- End Testimonials Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
    <div class="container">

          <div
            class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h1> Les Types Du Development Personnel</h1>
            
                <?php
                 $bdd = new PDO('mysql:host=127.0.0.1;dbname=yana', 'root', '');
                 try {
                    $req= $bdd->prepare("SELECT * FROM typededev");
                    $req->execute();
                    $result = $req->fetchAll();
                    }catch(PDOException $e) {echo '<h1>';echo $e->getMessage();echo '</h1>';}
                    foreach ($result as $row) {
                        echo'<form action="" method="POST">
                        <div class="d-flex align-items-center">'; echo '<h3 style="text-align:center">';
  echo'<button type="submit" class="button button-block" style="font-size:20px" name='.$row['id'].' value="register">'.$row['typededev'].'</button>';
  if (isset($_POST[$row['id']])){
    echo '<iframe width="800" height="600" class="center"
    src="'.$row['video'].'">
    </iframe>';
    if(isset($_COOKIE[$row['id']])) {echo 'Vues:'.$_COOKIE[$row['id']];}
    else {echo "Vues:1";}
                            }                     
                       echo '</div>'; echo '</h3>';
                  
                  }
          ?>
  </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span></span></strong>. All Rights Reserved
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
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>