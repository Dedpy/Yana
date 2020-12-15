<?php
	include_once '../core/CommandeC.php';
    $comm= new CommandeC();
    $comm->supprimerCommande($_POST['id_commande']);
?>