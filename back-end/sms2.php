<?php
require_once '../core/livraisonC.php';
$l=new LivraisonManage();
$result=$l->afficher_livraison_id_commande($_POST['id_commande']);

//echo $l;
	// Authorisation details.
foreach ($result as $row){
	$username = "idaoptique@gmail.com";
	$hash = "9d86480d31bc0b4b00569e61ffc4977faada86596c68187c148b9e2b1c089e6b";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "idaoptique"; // This is who the message appears to be from.
	$numbers = "216".$row['telephone']; // A single number or a comma-seperated list of numbers
	$message = "votre commande sera livré le ".$row['date_livraison'];
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);}
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); 
	echo($result);// This is the result from the API
	curl_close($ch);
header("Location: afficher-livraison.php")
?>