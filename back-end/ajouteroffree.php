<?php


require '../entities/offre.php';
require '../core/offremanage.php';

if (isset($_POST['nom']) and isset($_POST['produit_id']) and isset($_POST['pourcentage']))
{
    
    	$offre = new Offre($_POST['nom'],$_POST['produit_id'],$_POST['pourcentage']);

	/*if(($_POST['pourcentage'])>75)
	{
		exit("Erreur, le pourcentage doit être compris entre 5% et 75% ");
	}*/
	

	$off= new OffreManage();
	$off->ajoutOffre($offre);
	header('Location: ListeDesOffres.php');

}

else
{

	echo"champs vide";
}

?>