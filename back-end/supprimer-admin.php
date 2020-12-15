<?php

require '../Core/AdminM.php';


$ad=new AdminManage();
$ad->supprimerAdmin();
echo "supprimer avec succes";
header("Refresh:2;url=affichage-admin-back.php");
 exit;



?>