<?php

 require '../core/clientfideleC.php'; 
 

 $client = new clientfideleC();
 $client->ajouterClientfidele($_POST['fidele']);
header('Location: Clienfidele.php');

							                                      

?>

