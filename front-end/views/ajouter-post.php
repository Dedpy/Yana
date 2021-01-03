<?php
include '../controller/ForumM.php';

$image="../assets/img/blog/general.png";
if ($_POST['categorie']=="General")
$image="../assets/img/blog/general.png";
else if ($_POST['categorie']=="Actualites") 
$image="../assets/img/blog/news.png";
else if ($_POST['categorie']=="Aide")
$image="../assets/img/blog/help.png";
else if ($_POST['categorie']=="Feedback")
$image="../assets/img/blog/feedback.png";
else if ($_POST['categorie']=="Questions")
$image="../assets/img/blog/questions.png";


$var=new Forum($_POST['titre'],$_POST['categorie'],$_POST['msg'],$image,$_POST['id_client']);
$var2=new ForumManage();
$var2->ajouterPost($var);
?>