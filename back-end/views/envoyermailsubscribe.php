<?php
   
     require "../../front-end/config.php";

$to      = $_POST['to'];

 $db = config::getConnexion();
        $req = $db->query("SELECT email, hash from subscribe where email='$to' ");
            
                            $donnees = $req->fetch();
                            $hash=$donnees['hash'];


 $link = 'http://localhost/ProjetWeb2A28/front-end/views/unsubscribe.php?key='.$hash; //change your domain here.
 $strSubject="YANA | Newsletter";
 $header='Content-type: text/html; charset=iso-8859-1 From :dedsec1450@esprit.tn';
     
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
              
                $body = "Hi,nn This is test email send by PHP Script";
                $headers = "From: sender\'s email";

                if (mail($to, $strSubject, $message, $headers)) {
                  echo "Email successfully sent to $to...";
              } else {
                  echo "Email sending failed...";
              }
//header('Location: page-confirm-mail.html');
?>