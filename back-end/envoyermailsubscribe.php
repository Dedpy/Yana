<?php
   
     require "../config.php";

$to      = $_POST['to'];
$message = $_FILES['avatar'];


 $db = config::getConnexion();
        $req = $db->query("SELECT email, hash from subscribe where email='$to' ");
            
                            $donnees = $req->fetch();
                            $hash=$donnees['hash'];


 $link = 'http://localhost/code/light/unsubscribe.php?key='.$hash; //change your domain here.
 $strSubject="IDA_OPTIQUE | Newsletter";
 $header='Content-type: text/html; charset=iso-8859-1 From :contact.zaytatn@gmail.com';
        
     
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

header('Location: http://localhost/code/light/page-confirm-mail.html');
        



?>