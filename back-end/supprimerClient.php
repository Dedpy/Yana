<?php

require "../Core/ClientC.php";


$cl=new ClientManage();
$cl->supprimerClient();
header("Location: affichage-clients-back.php");
 exit;

?>