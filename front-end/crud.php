<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>YANA</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v2.0.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$conn = mysqli_connect("localhost","root","","yana");
if ($conn) {
	echo "connected";
}

	 	if(isset($_POST['subbb'])){
            $msgreclamation=$_POST['msgreclamation'];
      
           
	$sql = "INSERT INTO `reclamation`( `message_reclamation`) VALUES  ('$msgreclamation')";
	$qry= mysqli_query($conn, $sql);
	if ($qry) {
		echo "image uploaded" ;
  }
  

  //Mail notifcation------------------------------------------------------

	$message = "
						<h2>Attention Reclamation recu !!!!.</h2>
						<p>Mon reclamation:</p>
						<p>Description Reclamation: ".$msgreclamation."</p>
						<p>Merci d'avance.</p>
					";

					//Load phpmailer
		    		require ('assets/vendor/autoload.php');

		    		$mail = new PHPMailer(true);                             
				    try {
				        //Server settings
				        $mail->isSMTP();                                     
				        $mail->Host = 'smtp.gmail.com';                      
				        $mail->SMTPAuth = true;                               
				        $mail->Username = 'mouhamedakrem.mouaddeb@esprit.tn';     
				        $mail->Password = '191JMT1863
                ';                    
				        $mail->SMTPOptions = array(
				            'ssl' => array(
				            'verify_peer' => false,
				            'verify_peer_name' => false,
				            'allow_self_signed' => true
				            )
				        );                         
				        $mail->SMTPSecure = 'ssl';                           
				        $mail->Port = 465;                                   

				        $mail->setFrom('Mohammed@client.com');
				        
				        //Recipients
				        $mail->addAddress("mouhamedakrem.mouaddeb@esprit.tn");              
				        $mail->addReplyTo('Mohammed@client.com');
				       
				        //Content
				        $mail->isHTML(true);                                  
				        $mail->Subject = 'Reclamation Recu !!!!';
				        $mail->Body    = $message;

                $mail->send();
              }catch(Exception $e) {
                echo $e->getMessage();
              }




  //**************************************************************** */
}
	$result= $conn->query('SELECT * FROM reclamation') or die ($mysqli->error);
	
	//pre_r ($result);
	?>
	<!doctype html>
<html class="no-js"  lang="en">
<div class="container">
<div class="row justify-content-center"> 
						 <table class="table">
							 <thead>
								 <tr>
									 <th>id reclamation </th>
									 <th>msg reclamation</th>
									 <th colspan="2">action</th>
								 </tr>
							 </thead>
							 



                    
					
                    <?php
while ($row =$result->fetch_assoc()): 	
 
?>














                    <tr>
	<td> <?php echo $row['id_reclamation']; 
	 ?> </td>
	

	 <td> <?php echo $row['message_reclamation']; 
	 ?> </td>
	
		<td>
		
            <a href="crud.php?delete=<?php echo $row['id_reclamation'];?>" class="btn btn-danger">Delete </a>
            <a href="update.php?edit=<?php echo $row['id_reclamation'];?>" class="btn btn-info">edit </a>


			
</td>
	 </tr>


<?php








 endwhile;
 if (isset($_GET['delete'])){
	$id=$_GET['delete'];
	$conn->query ("DELETE FROM reclamation WHERE id_reclamation=$id") or die($conn->error());
}
 function pre_r ($array) {
	echo '<pre>' ;
	print_r ($array);
	echo '<pre>';
} 

if (isset($_GET['edit'])){
  header('location: update.php ');
}
 ?>


</table>
                         </div>
                    </div>
                    </html>

















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
            <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="developement_p.html">Development Personelle</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="blog_all.html">Blog</a></li>
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