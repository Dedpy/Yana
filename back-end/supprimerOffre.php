<?PHP


require '../entities/offre.php';
require '../core/offremanage.php';


$off= new OffreManage();
	$off->supprimerOffre();
	header('Location: ListeDesOffres.php');


?>