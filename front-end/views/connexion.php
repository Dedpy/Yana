<?php

    include_once '../Model/patient.php';
    include_once '../Controller/patientC.php';
    session_start();
  




    $error = "";
    // create user
    $user = null;
    // create an instance of the controller
    $userC = new patientC();
    if (
        isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["date_naissance"]) && 
        isset($_POST["telephone"]) &&
        isset($_POST["email"]) && 
        isset($_POST["login"]) && 
        isset($_POST["password"])&&
        isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"]
                
    ) { 
        if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["date_naissance"]) && 
            !empty($_POST["telephone"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["login"]) && 
            !empty($_POST["password"])
            
        ) {
            $sql="SELECT * FROM patient WHERE email='" . $_POST['email'] . "'";
			$db = config::getConnexion();
			
				$query=$db->prepare($sql);
				$query->execute();
                $count=$query->rowCount();
                if($count==0){
            $user = new patient(
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['date_naissance'],
                $_POST['telephone'],
                $_POST['email'],
                $_POST['login'],
                $_POST['password']
            );
    
            
            $userC->ajouterPatient($user);
            header('Location:login.php');
        
            $status = "<p style='color:#FFFFFF; font-size:20px'>
            <span style='background-color:#46ab4a;'>Votre code captcha est correct.</span></p>";
        }
        else echo 'l email existe deja';
        }
    
        else
        $error = "Missing information";
    }
     
?>

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

      <h1 class="logo mr-auto"><a href="../index.html">YANA</h1>
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
  <section></section>
   
    
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h1 class="text-center font-weight-light my-4">S'inscrire</h1>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <table  align="center">
                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="nom">Nom:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="nom" id="nom" maxlength="20" placeholder="Entrer le nom" >
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="prenom">Prénom:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="prenom" id="prenom" maxlength="20" placeholder="Entrer le prenom">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="date_naissance">date de naissance:</label>
                                                </td>
                                                <td>
                                                    <input  class="form-control" type="date" name="date_naissance" id="date_naissance">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="telephone">telephone:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="telephone" id="telephone" maxlength="20" placeholder="Entrer le numero de telephone">
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="email">Adresse mail:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn|.+@yahoo.com|.+@yahoo.fr" placeholder="Entrer l'adresse mail">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="login">Login:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="login" id="login" placeholder="Entrer le nom d'utilisateur">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="password">Mot de passe:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="password" name="password" id="password" placeholder="Entrer le mot de passe">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="confpassword">Verifier Mot de passe:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="password" name="confpassword" id="confpassword" placeholder="Confirmer le mot de passe">
                                                </td>
                                            </tr>

                                </div>
                                            <tr>
                                                <td></td>
                                                <td>
                                                <img src="captcha.php"/>
                                                <input class="form-control" type="text" name="captcha"/>
                                                    <input class="btn btn-primary btn-block" type="submit" value="Envoyer" onclick="verif();"> 
                                                   

                                                </td>
                                            </tr>
                                           
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input class="btn btn-primary btn-block" type="reset" value="Annuler" >
                                                </td>
                                            </tr>
                                            <tr><td></td> </tr>
                                        </table>
                                        
                                    </form>
                                    
   
                                <div class="btn btn-primary btn-block" onclick="myFunction()" >Imprimer la page</div>
                                
                                <script>
                                function myFunction() {
                                    window.print();
                                }
                                </script>
                            </div>
                        <div> 
                            <a href="login.php">j'ai deja un compte </a> 
                        </div>
                        </div>
                    </div>
                </div>                         
            </div>
        </div>
    </body>
</html>
                      
