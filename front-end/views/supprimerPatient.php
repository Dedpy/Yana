<?PHP
	include "../controller/UtilisateurC.php";

	$utilisateurC=new UtilisateurC();
	
	if (isset($_POST["id"])){
		$utilisateurC->supprimerPatient($_POST["id"]);
		header('Location:afficherPatient.php');
	}

?>
