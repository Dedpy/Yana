<?PHP

require '../entities/promotion.php';
require '../core/promotionmanage.php';


$pro= new PromotionManage();
if (isset($_POST["code"])){
	$pro->supprimerPromotion($_POST["code"]);
	header('Location: ListeDesPromotions.php');
}

?>