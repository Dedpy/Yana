<?php
	require_once '../core/livraisonC.php';
	$l=new Livraison2($_POST['id_client'],$_POST['id_commande'],$_POST['date_livraison'],$_POST['statut']);
	$liv=new LivraisonManage();
    											$liv->enregistrerLivraison($l)
    												
    											
    												?>