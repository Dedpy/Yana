<?php

require_once('../config.php');
$db = config::getConnexion();
if (isset($_POST['delete']) && isset($_POST['id'])){
	
	
	$id = $_POST['id'];
	
	$sql = "DELETE FROM events WHERE id = $id";
	$query = $db->prepare( $sql );
	if ($query == false) {
	 print_r($db->errorInfo());
	 die ('Erreur prepare');
	}
	$res = $query->execute();
	if ($res == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}
	
}elseif (isset($_POST['title']) && isset($_POST['hstart']) && isset($_POST['hend']) && isset($_POST['color']) && isset($_POST['id'])){
	
	$id = $_POST['id'];
	$title = $_POST['title'];
	$hstart = $_POST['hstart'];
	$hend = $_POST['hend'];
	$color = $_POST['color'];
	
	$sql = "UPDATE events SET  title = '$title',heure_debut= '$hstart',heure_fin='$hend', color = '$color' WHERE id = $id ";

	
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
header('Location: calendrier.php');

	
?>
