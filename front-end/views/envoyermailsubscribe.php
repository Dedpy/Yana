<?php
   
     require "../config.php";

$to      = $_POST['to'];
$message = $_FILES['avatar'];


 $db = config::getConnexion();
        $req = $db->query("SELECT email, hash from subscribe where email='$to' ");
            
                            $donnees = $req->fetch();
                            $hash=$donnees['hash'];


 $link = 'http://localhost/ProjetWeb2A28/front-end/views/unsubscribe.php?key='.$hash; //change your domain here.
 $strSubject="YANA | Newsletter";
 $header='Content-type: text/html; charset=iso-8859-1 From :yana.tn@esprit.tn';
        
     
        $message = '<html>
                  <body>



                    <div id="contenu" align="Center">
                      <header>
        
      </header>

                        <img src="https://i.imgur.com/0xAWO1X.png" width="250" height="250">
                        <br>
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

        $mail_sent=mail($to, $strSubject, $message,$header);

header('Location: page-confirm-mail.html');
        



?>