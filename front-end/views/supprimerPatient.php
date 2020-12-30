<?PHP
	include "../controller/patientC.php";

	$patientC=new patientC();
	
	if (isset($_POST["id"])){
		$patientC->supprimerPatient($_POST["id"]);
		header('Location:afficherPatient.php');
	}

?>