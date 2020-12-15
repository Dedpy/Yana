<?php

$header='Content-type: text/html; charset=iso-8859-1 From :ida-optique@gmail.com';
      
     if( mail($_GET['email_env'],$_GET['sujet_env'],$_GET['message_env'],$header))
      {echo "envoyer";}
      else
        {echo "error";}

?>
