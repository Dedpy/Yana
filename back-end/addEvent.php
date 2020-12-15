<?php

// Connexion à la base de données
require_once('../config.php');
$db = config::getConnexion();
//echo $_POST['title'];
if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['hstart']) && isset($_POST['hend']) && isset($_POST['color'])){
	
	$title = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$hstart = $_POST['hstart'];
	$hend = $_POST['hend'];
	$color = $_POST['color'];

	$sql = "INSERT INTO events(title, start_event, end_event,heure_debut,heure_fin, color) values ('$title', '$start' , '$end','$hstart','$hend', '$color')";
	//$req = $bdd->prepare($sql);
	//$req->execute();
	
	
	$query = $db->prepare( $sql );
	if ($query == false) {
	 print_r($db->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
