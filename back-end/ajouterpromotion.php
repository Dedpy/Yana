<?php

require '../entities/promotion.php';
require '../core/promotionmanage.php';



	$promotion = new Promotion($_POST['code'], $_POST['pourcentage']);
	

	$pro= new PromotionManage();
	$pro->ajoutPromotion($promotion);
	header('Location: ListeDesPromotions.php');
	//echo "ajout avec success";

?>