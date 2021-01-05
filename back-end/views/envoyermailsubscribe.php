<?php
   
     require "../../front-end/config.php";

     include_once '../Model/patient.php';
     require('../config.php');
     session_start();
 
$to      = $_POST['to'];

 $db = config::getConnexion();
        $req = $db->query("SELECT email, hash from subscribe where email='$to' ");
            
                            $donnees = $req->fetch();
                            $hash=$donnees['hash'];


 $link = 'http://localhost/ProjetWeb2A28/front-end/views/unsubscribe.php?key='.$hash; //change your domain here.
 $sujet="YANA | Newsletter";
 $headers='Content-type: text/html; charset=iso-8859-1 From :dedsec1450@esprit.tn';
     
        $message = '<html>
                  <body>
                    <div id="contenu" align="Center">
                      <header>       
      </header>
                        <font color =#E9383F size= 2px>  Merci de vous être abonné 
                         <br>
                         Email: '.$to.' 
                         <br>
                         <br>
                         <br>
                         <br>
                         Cliquez ici pour vous désabonner de notre newsletter : 
                         </font>
                         <br>
                         <br>


                         <font color =#FF866A size=4px> '.$link.' </font>
                      
                        <br>
                        <br>
                        <br>
                        <br>

                       
                    </div>
                  </body>
                </html>';
              
                $email1="behijabenghorbel@gmail.com";    
                $message =" Bonjour $login voici votre code de verification $code " ;
                $headers = 'From: ' .$email1 . "\r\n".'Reply-To: ' . $email1. "\r\n".'X-Mailer: PHP/' . phpversion();
                if (mail($to, $sujet, $message, $headers)) {
                    echo "Email envoyé avec succès à $to ...";
                } 
                else {
                     echo "Échec de l'envoi de l'email...";
                }
                header('Location: page-confirm-mail.html');
            }
    }
  catch (Exception $e){
    die('Erreur: '.$e->getMessage());
        }
    } 

?>