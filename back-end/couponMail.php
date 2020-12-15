<?php

include  '../config.php';

$coupon=$_POST['codePromo'];
$Client=$_POST['id_client'];

 $db = config::getConnexion();
 $req = $db->query("SELECT email from client where id='$Client' ");
 $donnees = $req->fetch();
 $to=$donnees['email'];

 $header='Content-type: text/html; charset=iso-8859-1 From :contact.zaytatn@gmail.com';
        
        $strSubject="IDA_OPTIQUE | Code Promo";
        $message = '<html>
                  <body>



                    <div id="contenu" align="Center">
                      <header>
        
      </header>

                        <img src="https://i.imgur.com/0xAWO1X.png" width="250" height="250">
                        <br>
                        <font color =#E9383F size= 2px Votre code Promo est <font color =#FF866A size=5px> '.$coupon.' </font> est votre code Promo. Il vous permet de bénéficier d’une réduction sur votre prochain achat d un produit </font>
                        <br>
                        <br>
                        <br>
                        <br>
                        <font color =#E9383F size= 2px> Merci pour votre fidélité </font>
                    </div>
                  </body>
                </html>';

        $mail_sent=mail($to, $strSubject, $message,$header);
        header('Location: http://localhost/code/light/page-confirm-mail.html');






?>
