<?php
//include "../controller/patientC.php";
//require 'vendor/autoload.php';
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["id"])){
    var_dump($_SESSION);
		header("Location: views/login.php");
		exit(); 
  }
  
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=yana', 'root', '');
for($i=1;$i<500;$i++)
{
try {
$req= $bdd->prepare("SELECT * FROM specialite WHERE id='$i'");
$req->execute();
$result = $req->fetchAll();
}
catch(PDOException $e) {$e->getMessage();}
foreach ($result as $row) {
  if(isset($row['id'])){
$_SESSION[$i]=$row['specialite'];}}}
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
    <a href="views/modifierPatient.php?id=<?PHP echo $_SESSION['id']; ?>" class="appointment-btn scrollto"> Modifier </a>
    <a href="views/logout.php" class="appointment-btn scrollto">Déconnexion</a>
</div>
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.php">YANA</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo mr-auto"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.php">Home</a></li>
          <li><a href="forum.php">Blog</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="mesconsultations.php">Mes consumltations</a></li>
          <li><a href="#doctors">Doctors</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="../index.php#appointment">Planifier un RDV</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
 <section></section>
         <!-- ======= consultations Section ======= -->
    <section id="consultations" class="consultations section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Mes consultations</h2>
          <h3 class="trash">
          <?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=yana', 'root', '');
   try {
$req= $bdd->prepare('SELECT * FROM rendezvous');
$req->execute();
$result = $req->fetchAll();
}
catch(PDOException $e) {$e->getMessage();}
echo'<div text-align:center>';
$i=0;
foreach ($result as $row) {
   { if ($row['id_patient']==$_SESSION["id"])
    {$id=$row['id'];$i++;
      echo '<form name="changer_date" action="" method="POST"> date : ';echo $row['date'];echo " ";
      echo'<input type="date" class="kk"name="date" style="width: 500px ">  <input class="btn" type="submit" name="changer_date" value="Confirmer" /></form>';
      echo '<form name="changer_heure" action="" method="POST">heure : ';echo $row['heure'];echo " ";
      echo'<input class="kk"name="heure" style="width: 500px" type="time" >  <input class="btn" type="submit" name="changer_heure" value="Confirmer" /></form>';
      echo '<br>';echo " Spécialiste :‎‏‏‎ ‎‏‏‎  ";echo $row['docteur'];echo '<br>';echo '<br>';
      echo '<form name="supprimer" action="" method="POST">';
      echo' <input class="btn" type="submit" name="supprimer" value="Supprimer" /></form>';
      if(isset($_POST['changer_date'])){$nom= htmlspecialchars($_POST['date']);
        try {
          $conn = new PDO('mysql:host=127.0.0.1;dbname=yana', 'root', '');
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "UPDATE rendezvous SET date='$nom' WHERE id='$id'";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          echo $stmt->rowCount() . " records UPDATED successfully";
          header("Location: mesconsultations.php");
        } catch(PDOException $e) {
          echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;}
        if(isset($_POST['changer_heure'])){$nom= htmlspecialchars($_POST['heure']);
          try {
            $conn = new PDO('mysql:host=127.0.0.1;dbname=yana', 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE rendezvous SET heure='$nom' WHERE id='$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo $stmt->rowCount() . " records UPDATED successfully";
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
        $conn = null;}
        if(isset($_POST['supprimer'])){
          try {
            $conn = new PDO('mysql:host=127.0.0.1;dbname=yana', 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM rendezvous WHERE id='$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo $stmt->rowCount() . " records UPDATED successfully";
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
          $conn = null;}
          
          
    }}}if($i==0){echo 'Aucun Rendez-vous !';} 
?>                
</h3> 
    </section><!-- End consultations Section -->
    <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Medilab</h3>
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

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
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
      &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
