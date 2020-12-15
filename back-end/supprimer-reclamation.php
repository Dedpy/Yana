<?php

require '../core/reclamationM.php';

$cl=new ReclamationManage();
$cl->supprimerreclamation2($_GET['id']);


?>