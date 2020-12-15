<?php
require_once '../core/TrackingC.php';
$var=new Position($_POST['id'],$_POST['lat'],$_POST['lng']);
$var2=new PositionManage();
$var2->ajouter_Postion($var);
?>