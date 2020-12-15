<?php
 include 'session.php';
require '../core/AdminM.php';


$ad1=new Admin($_POST['nom'],$_POST['prenom'],$_POST['pseudo'],$_POST['email'],$_POST['motDePasse']);

//var_dump($emp1);
$ad=new AdminManage();

$ad->ajouterAdmin($ad1);


?>